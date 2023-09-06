<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\RedirectResponse;


use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function daftar()
    {
        return view('auth.signup');
    }

    function postdaftar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            // Tambahkan aturan validasi lain sesuai kebutuhan Anda.
        ]);
    
        if ($validator->fails()) {
            return redirect()
                ->route('nama_rute_form')
                ->withErrors($validator)
                ->withInput();
        }
    
        $daftar = User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'role' => 'pelanggan',

        ]);
        return redirect('masuk')->with('success', 'User berhasil dibuat');
    }

    public function masuk(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            
            // Jika autentikasi berhasil
            if (Auth::user()->isAdminRestoran()) {
                // Jika pengguna memiliki peran admin restoran

                return redirect()->intended('/dashboard');
            } elseif (Auth::user()->isPelanggan()) {
                // Jika pengguna memiliki peran pelanggan
                return redirect()->intended('/');
            }
        } else {
            // Jika autentikasi gagal
            // dd($credentials);
            return back()->withErrors(['email' => 'Email atau password salah.']);
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/masuk');
    }
}
