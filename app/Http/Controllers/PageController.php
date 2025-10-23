<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        if (session()->has('username')) {
            return redirect()->route('dashboard', ['username' => session('username')]);
        }

        return view('login');
    }

    public function doLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === 'admin' && $password === 'admin.123') {
            session(['username' => $username]);
            return redirect()->route('dashboard', ['username' => $username])->with('message', 'Login berhasil, selamat datang ' . $username . '!');
        }

        return redirect()->route('login')->with('error', 'Username atau password salah!');
    }

    public function dashboard(Request $request)
    {
        if (!session()->has('username')) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu!');
        }

        $username = $request->query('username', session('username'));
        $summary = [
            'total_hewan' => 12,
            'total_layanan' => 3,
            'total_transaksi' => 5,
        ];

        return view('dashboard', compact('username', 'summary'));
    }

    public function pengelolaan(Request $request)
    {
        if (!session()->has('username')) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu!');
        }

        $username = $request->query('username', session('username'));
        $items = [
            ['id' => 1, 'nama' => 'Grooming', 'harga' => '50.000', 'durasi' => '1 jam', 'gambar' => 'images/grooming.jpeg'],
            ['id' => 2, 'nama' => 'Vaksin Rabies', 'harga' => '80.000', 'durasi' => '15 menit', 'gambar' => 'images/vaksin.jpg'],
            ['id' => 3, 'nama' => 'Penitipan Harian', 'harga' => '100.000', 'durasi' => '24 jam', 'gambar' => 'images/penitipan.jpeg'],
        ];

        return view('pengelolaan', compact('username', 'items'));
    }

    public function profile(Request $request)
    {
        if (!session()->has('username')) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu!');
        }

        $username = $request->query('username', session('username'));
        $profile = [
            'username' => $username,
            'fullname' => 'Nadine Alfina Azzahwa',
            'email' => '242410103040@unej.ac.id',
            'role' => 'Admin',
        ];

        return view('profile', compact('username', 'profile'));
    }

    public function logout()
    {
        session()->forget('username');
        session()->flush();
        session()->regenerate();

        return redirect()->route('login')->with('message', 'Logout berhasil, sampai jumpa lagi!');
    }
}
