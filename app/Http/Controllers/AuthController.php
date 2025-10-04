<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
 
    public function showLoginForm()
    {
        return view('login');
    }

   public function login(Request $request)
{
   if (Auth::attempt([
    'username' => $request->username,
    'password' => $request->password,
])) {
    $request->session()->regenerate(); 
    $user = Auth::user();
    if ($user->role == 'Admin') {
        return redirect()->route('admin.dashboard');
    } elseif ($user->role == 'Operator') {
        return redirect()->route('home');
    } else {
        Auth::logout();
        return redirect()->route('login')
            ->withErrors(['login' => 'Access denied. Invalid role.']);
    }
}

return back()->withErrors([
    'login' => 'Username atau password salah.',
]);

    return redirect()->route('login')->with('pesan', 'Username atau password salah.');
}

    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
