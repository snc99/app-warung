<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            if ($user->level == 'admin') {
                return redirect()->intended('dashboard');
            }
        }

        return view('login');
    }

    public function proses(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ],
            [
                'email.reuired' => 'email tidak boleh kosong',
                'password.reuired' => 'password tidak boleh kosong',
            ]
        );

        $kredensial = $request->only('email', 'password');

        if (Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->level == 'admin') {
                // return redirect()->intended('dashboard');
                return redirect()->to('dashboard')->with('toast_success', 'Berhasil Login');
            } else {
                Alert::error('Terjadi Kesalahan', 'Email atau password salah');
                return redirect('/login');
            };
        }

        // return redirect()->to('/login')->with('toast_error', 'Email atau password salah');


        Alert::error('Terjadi Kesalahan', 'Email atau password salah');
        return redirect('login');
    }


    public function logout(request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/');
    }
}
