<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    //untuk login
    public function showLoginForm()
    {
        return view('login');
    }

    //proses login
    public function login(Request $request)
    {
        $validasi = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt($validasi)) {
            $user = Auth::user();

            return redirect('/admin/dashboard');
        }

        return back()->withErrors(['login' => 'Username atau password salah.']);

    }

    //untuk logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
