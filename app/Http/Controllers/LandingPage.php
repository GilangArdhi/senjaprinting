<?php

namespace App\Http\Controllers;

use App\Models\FotoProduct;
use App\Models\User;
use App\Models\Keranjang;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LandingPage extends Controller
{
    function index()
    {
        $sablon = Product::all();
        // $restoran = User::get();
        // foreach ($sablon as $index => $csablon) {
        //     $dbrestoran = $restoran->where('id', $sablon[$index]['id_restaurants'])->first();
        //     $sablon[$index]['restoran'] = $dbrestoran->nama;
        //     $sablon[$index]['alamat_restoran'] = $dbrestoran->alamat;

        //     //expdates
        //     $date = Carbon::parse($sablon[$index]['exp_dates'])->format('l, d-m-Y ');
        //     $sablon[$index]['kadaluarsa'] = $date;
        // }
        // dd($sablon);
        return view('landingpage.index', ['sablon' => $sablon]);
    }

    //mengarahkan ke halaman detail produk
    function detail(Request $request){
        $idProduk = $request->query('id');
        $sablon = Product::all();
        $tampil = Product::where('id', $idProduk)->get();
        $foto = FotoProduct::where('id_produk', $idProduk)->get();
        // dd($foto);
        // dd($tampil);
        // dd($idProduk);
        return view('landingpage.product-page', ['tampil' => $tampil, 'sablon' => $sablon, 'foto' => $foto]);
    }

    
    public function masukKeranjang(Request $request)
    {
        $id_user = Auth::id();
        $id_produk = $request->id;
        $jmlBarang = $request->quantity;
        $ukuran = $request->input('size');
        $keranjang = Keranjang::where('id_pelanggan', $id_user)->where('id_produk', $id_produk)->where('has_bought', false)->first();

        if ($keranjang) {
            $keranjang->qty = $keranjang->qty + $jmlBarang;
            $keranjang->save();
            return back()->with('sukses', 'Barang berhasil ditambahkan');
        } else {
            $order = Keranjang::create([
                'id_produk' => $id_produk,
                'id_pelanggan' => $id_user,
                'qty' => $jmlBarang,
                'ukurandipesan' => $ukuran,
                'has_bought' => 0,
            ]);

            return back()->with('sukses', 'Barang berhasil ditambahkan');
        }
        return back()->with('gagal', 'Barang gagal ditambahkan');
    }

    public function keranjang(){
        $id_user = Auth::id();
        $keranjang = DB::table('keranjangs')
        ->join('produk', 'produk.id', '=', 'keranjangs.id_produk')
        ->where('keranjangs.id_pelanggan', $id_user)->get();
        //dd($keranjang);
        return view('landingpage.shopping-cart', ['keranjang' => $keranjang]);
    }

    public function editKeranjang(Request $request)
    {
        $id_user = Auth::id();
        // $user = User::where('id', $id_user)->get();
        $id_produk = $request->id;
        $jmlBarang = $request->input('quantity-' . $id_produk);
        $keranjang = Keranjang::where('id_pelanggan', $id_user)->where('id_produk', $id_produk)->where('has_bought', false)->first();

        // $rincian = DB::table('keranjangs')
        // ->join('produk', 'produk.id', '=', 'keranjangs.id_produk')
        // ->where('keranjangs.id_pelanggan', $id_user)->get();

        if ($keranjang->qty != $jmlBarang) {
            $keranjang->qty = $jmlBarang;
            $keranjang->save();
            return redirect('/pembayaran');
            // return back()->with('sukses', 'Barang berhasil ditambahkan');
        } else {
            return redirect('/pembayaran');
            // $order = Keranjang::create([
            //     'id_produk' => $id_produk,
            //     'id_pelanggan' => $id_user,
            //     'qty' => $jmlBarang,
            //     'has_bought' => 0,
            // ]);

            // return back()->with('sukses', 'Barang berhasil ditambahkan');
        }
        return back()->with('gagal', 'Barang gagal ditambahkan');
    }

    public function pembayaran(){
        $id_user = Auth::id();
        $user = User::where('id', $id_user)->get();

        $rincian = DB::table('keranjangs')
        ->join('produk', 'produk.id', '=', 'keranjangs.id_produk')
        ->where('keranjangs.id_pelanggan', $id_user)->get();

        return view('landingpage.shopping-cart-step-2', ['user' => $user, 'rincian' => $rincian]);
    }

    public function search(Request $request)
    {
        // dd(request('search'));
        $keyword = request('search');
        // $restoran = User::get();
        // $location = $request->input('location');
        
        if (!empty($keyword)){
            // Lakukan query sesuai dengan keyword dan location yang diterima
            $sablon = Product::where('judul', 'LIKE', '%' . $keyword . '%')->get();
                // dd($food);
                
            return view('landingpage.search', ['sablon' => $sablon]);
        } else {
            $sablon = Product::all();
            return view('landingpage.search', ['sablon' => $sablon]);
        }
    }
}
