<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class SessionController extends Controller
{
    function index()
    {
        return view('login');
    }

    function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => '- Email wajib di isi',
            'email.email' => '- Email yang anda masukan tidak terdaftar',
            'password.required' => '- Password wajib di isi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            toast('Berhasil Login', 'success');
            return redirect('dashboard');
        } else {
            Alert::error('Terjadi Kesalahan', 'Email atau password yang anda masukan salah');
            return redirect('sesi');
        };
    }

    function logout()
    {
        Auth::logout();
        return redirect('sesi');
    }
}
