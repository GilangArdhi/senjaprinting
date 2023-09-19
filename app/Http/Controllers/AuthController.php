<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
    public function verifyr()
    {
        return view('auth.verify');
    }

    function postdaftar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required|min:6',
            'email' => 'required|email',
            'alamat' => 'required',
            'no_hp' => 'required',
            // Tambahkan aturan validasi lain sesuai kebutuhan Anda.
        ]);
    
        if ($validator->fails()) {
            return redirect()
                ->route('daftar')
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
        $daftar->sendEmailVerificationNotification();
        return redirect('masuk')->with('success', 'User berhasil dibuat Silakan Cek email Untuk verifikasi');
        // return back()->with('success', 'User berhasil dibuat Silakan Cek email Untuk verifikasi');
        // return redirect()->route('verification.notice');
        // return redirect('auth.verify');
    }

    public function masuk(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // dd($credentials);
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
