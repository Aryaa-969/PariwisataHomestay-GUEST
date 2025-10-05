<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login-form');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => [
                'required',
                'min:3',
                'regex:/[A-Z]/', // wajib ada huruf kapital
            ],
        ], [
            'email.required' => 'Email wajib diisi!',
            'email.email' => 'Format email tidak valid!',
            'password.required' => 'Password wajib diisi!',
            'password.min' => 'Password minimal 3 karakter!',
            'password.regex' => 'Password harus mengandung huruf kapital!',
        ]);

        // 🔹 Contoh data user (disimulasikan)
        $users = [
            [
                'email' =>'arya@gmail.com',
                'password' => 'UserABC', // password benar
                'name' => 'Arya',
            ],
        ];

        // Cek apakah email dan password cocok
        $found = collect($users)->first(function ($user) use ($request) {
            return $user['email'] === $request->email && $user['password'] === $request->password;
        });

        if ($found) {
            return redirect()->route('dashboard')->with('success', 'Login berhasil! Selamat datang, ' . $found['name']);
        } else {
            return redirect()->back()->with('error', 'Email atau password salah!')->withInput();
        }
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
