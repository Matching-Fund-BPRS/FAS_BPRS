<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthenticateController extends Controller
{
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password'=> 'required'
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('home')->with('message', 'Selamat datang di web BPRS Batimakmur Indah!');
        }else{
            return redirect()->back()->with('message', 'Login gagal!');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function register(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => 0,
        ]);

        return redirect()->route('login')->with('message', 'Daftar berhasil, silakan login!');
    }
}
