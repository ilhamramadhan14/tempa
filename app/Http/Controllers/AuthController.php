<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name'          => 'required|string|max:255',
            'email'         => 'required|email|unique:users,email',
            'password'      => 'required|min:6|confirmed',
            'fakultas'      => 'required|string|max:150',
            'program_studi' => 'required|string|max:150',
            'angkatan'      => 'required|integer|min:2015|max:2030',
        ], [
            'email.unique'       => 'Email mahasiswa ini sudah terdaftar.',
            'password.confirmed' => 'Konfirmasi kata sandi tidak cocok.',
            'password.min'       => 'Kata sandi minimal 6 karakter.',
        ]);

        $user = User::create([
            'name'          => $validated['name'],
            'email'         => $validated['email'],
            'password'      => Hash::make($validated['password']),
            'fakultas'      => $validated['fakultas'],
            'program_studi' => $validated['program_studi'],
            'angkatan'      => $validated['angkatan'],
        ]);

        Auth::login($user);

        return redirect('/')->with('success', 'Akun berhasil dibuat!');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->has('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Email atau kata sandi salah.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}