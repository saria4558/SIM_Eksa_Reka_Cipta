<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            $user = Auth::user();
            
            // Redirect berdasarkan role
            return match ($user->role) {
                'guru' => redirect()->route('guru.dashboard.dashboard'),
                'murid' => redirect()->route('wali.dashboard.dashboard'),
                'kepsek' => redirect()->route('dashboard.kepsek'),
                'staff' => redirect()->route('staff.dashboard'),
                default => redirect('/wali/dashboard'),
            };
        }
            return back()->withErrors([
                'username' => 'Username atau password salah.',
            ]);
    }
    public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login');
}
}
