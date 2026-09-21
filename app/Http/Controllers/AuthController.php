<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman login
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Proses login
     */
    public function login(Request $request)
    {
        // TODO: logika login sesungguhnya
        // $credentials = $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);
        
        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect()->intended(route('dashboard'));
        // }
        
        // return back()->withErrors([
        //     'email' => 'Email atau password salah.',
        // ])->onlyInput('email');
        
        return redirect()->route('dashboard');
    }

    /**
     * Menampilkan halaman register (placeholder)
     */
    public function showRegisterForm()
    {
        // TODO: buat view('auth.register') setelah halaman daftar dibuat
        return redirect()->route('login');
    }
}
