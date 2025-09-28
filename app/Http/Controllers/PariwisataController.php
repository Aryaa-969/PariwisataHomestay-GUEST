<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PariwisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinasi = [
            [
                'nama' => 'Pantai Tanjung Tinggi',
                'lokasi' => 'Belitung',
                'deskripsi' => 'Pantai dengan pasir putih dan batu granit besar.',
            ],
            [
                'nama' => 'Gunung Bromo',
                'lokasi' => 'Jawa Timur',
                'deskripsi' => 'Gunung berapi aktif dengan pemandangan sunrise yang menakjubkan.',
            ],
            [
                'nama' => 'Danau Toba',
                'lokasi' => 'Sumatera Utara',
                'deskripsi' => 'Danau vulkanik terbesar di dunia.',
            ],
            [
                'nama' => 'Gunung Everest',
                'lokasi' => 'Nepal',
                'deskripsi' => 'Gunung tertinggi di dunia.',
            ],
        ];

        $homestay = [
            [
                'nama' => 'Homestay Belitung Seaview',
                'harga' => 'Rp 350.000/malam',
                'fasilitas' => ['WiFi', 'AC', 'Sarapan Gratis']
            ],
            [
                'nama' => 'Bromo Guest House',
                'harga' => 'Rp 250.000/malam',
                'fasilitas' => ['Parkir Gratis', 'Pemandangan Gunung']
            ],
            [
                'nama' => 'Toba Lake Homestay',
                'harga' => 'Rp 400.000/malam',
                'fasilitas' => ['WiFi', 'Kamar Keluarga', 'Akses Danau Langsung']
            ],
        ];

        return view('pariwisata', compact('destinasi', 'homestay'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
