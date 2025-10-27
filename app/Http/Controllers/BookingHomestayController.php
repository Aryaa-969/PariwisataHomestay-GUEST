<?php
namespace App\Http\Controllers;

use App\Models\BookingHomestay;
use Illuminate\Http\Request;

class BookingHomestayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = BookingHomestay::all();
        return view('guest.pages.booking.index', compact('bookings'));
    }

    public function create()
    {
        return view('guest.pages.booking.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kamar_id'         => 'required|integer',
            'warga_id'         => 'required|string',
            'checkin'          => 'required|date',
            'checkout'         => 'required|date|after_or_equal:checkin',
            'total'            => 'required|numeric',
            'status'           => 'required|string',
            'metode_bayar'     => 'required|string',
            'bukti_pembayaran' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        if ($request->hasFile('bukti_pembayaran')) {
            $validated['bukti_pembayaran'] = $request->file('bukti_pembayaran')->store('bukti', 'public');
        }

        BookingHomestay::create($validated);
        return redirect()->route('booking.index')->with('success', 'Booking berhasil ditambahkan!');
    }

    public function edit(BookingHomestay $booking)
    {
        return view('guest.pages.booking.edit', compact('booking'));
    }

    public function update(Request $request, BookingHomestay $booking)
    {
        $validated = $request->validate([
            'kamar_id'         => 'required|integer',
            'warga_id'         => 'required|string',
            'checkin'          => 'required|date',
            'checkout'         => 'required|date|after_or_equal:checkin',
            'total'            => 'required|numeric',
            'status'           => 'required|string',
            'metode_bayar'     => 'required|string',
            'bukti_pembayaran' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        if ($request->hasFile('bukti_pembayaran')) {
            $validated['bukti_pembayaran'] = $request->file('bukti_pembayaran')->store('bukti', 'public');
        }

        $booking->update($validated);
        return redirect()->route('booking.index')->with('success', 'Booking berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $booking = BookingHomestay::findOrFail($id);
        $booking->delete();

        return redirect()->route('booking.index')->with('success', 'Booking berhasil dihapus');
    }

}
