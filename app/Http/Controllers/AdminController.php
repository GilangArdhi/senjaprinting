<?php

namespace App\Http\Controllers;

use App\Models\FotoProduct;
use App\Models\User;
use App\Models\Keranjang;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(Request $request){
        $sablon = Product::all();
        $lastId = DB::table('produk')->max('id');
        // $lastId = Product::latest()->first()->id;
        $lastId += 1;
        // $id_produk = $sablon->first()->id; 
        // $gambar = FotoProduct::where('id_produk', $id_produk)->get();
        return view('admin.admin', ['sablon' => $sablon, 'lastId' => $lastId]);
    }

    public function insert(Request $request){
        $idProduk = $request->idProduk;
        $namaProduk = $request ->nama;
        if ($request->hasFile('gambar1')) {
            $gambarUtama = $request -> file('gambar1');
            $filenameGambarUtama = date('Y-m-d').$gambarUtama->getClientOriginalName();
            $path = 'assets/images/'.$filenameGambarUtama;
            Storage::disk('public')->put($path, file_get_contents($gambarUtama));
        }
        if ($request->hasFile('gambar2')) {
            $gambar2 = $request -> file('gambar2');
            $filenameGambar2 = date('Y-m-d').$gambar2->getClientOriginalName();
            $path = 'assets/images/'.$filenameGambar2;
            Storage::disk('public')->put($path, file_get_contents($gambar2));
        }
        if ($request->hasFile('gambar3')) {
            $gambar3 = $request -> file('gambar3');
            $filenameGambar3 = date('Y-m-d').$gambar3->getClientOriginalName();
            $path = 'assets/images/'.$filenameGambar3;
            Storage::disk('public')->put($path, file_get_contents($gambar3));
        }
        if ($request->hasFile('gambar4')) {
            $gambar4 = $request -> file('gambar4');
            $filenameGambar4 = date('Y-m-d').$gambar4->getClientOriginalName();
            $path = 'assets/images/'.$filenameGambar4;
            Storage::disk('public')->put($path, file_get_contents($gambar4));
        }



        $ukuran = $request -> ukuran;
        $deskripsi = $request -> deskripsi;
        $harga = $request -> harga;

        $lastId = DB::table('produk')->max('id');

        if ($idProduk != $lastId){

            $insert = Product::create([
                'id' => $idProduk,
                'judul' => $namaProduk,
                'gambar'=> $filenameGambarUtama,
                'ukuran' => $ukuran,
                'deskripsi' => $deskripsi,
                'harga' => $harga
            ]);

            if ($request->hasFile('gambar2')) {
                $insertFt = FotoProduct::create([
                    'fotoProduk' => $filenameGambar2,
                    'id_produk' => $idProduk
                ]); 
            }
            if ($request->hasFile('gambar3')) {
                $insertFt = FotoProduct::create([    
                
                    'fotoProduk' => $filenameGambar3,
                    'id_produk' => $idProduk
                
                ]); 
            }
            if ($request->hasFile('gambar4')) {
                $insertFt = FotoProduct::create([
                        'fotoProduk' => $filenameGambar4,
                        'id_produk' => $idProduk
                ]); 
            }
    
            return back()->with('sukses', 'Barang berhasil ditambahkan');       
        } else {
            return back()->with('gagal', 'Barang gagal ditambahkan');
        }
    }

    public function edit(Request $request){
        // Mengambil data produk yang akan diubah berdasarkan $idProduk
        $idProduk = $request->idProduk;
        $produk = Product::find($idProduk);
        $fotoProduk = FotoProduct::find($idProduk);
    
        if (!$produk || !$fotoProduk) {
            return back()->with('message', 'Produk tidak ditemukan');
        }
    
        // Update nilai Produk
        $produk->judul = $request->nama;
        // $produk->gambarUtama = $request->gambar1;
        $produk->ukuran = $request->ukuran;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;

        if ($request->hasFile('gambar1')) {
            $produk->gambar = $request->gambar1;
        }
        
        // Menyimpan perubahan pada Produk
        $produk->save();
    
        // Update nilai FotoProduk
        if ($request->hasFile('gambar2')) {
            $fotoProduk->fotoProduk = $request->gambar2;
        }
        if ($request->hasFile('gambar3')) {
            $fotoProduk->fotoProduk= $request->gambar3;
        }
        if ($request->hasFile('gambar4')) {
            $fotoProduk->fotoProduk= $request->gambar4;
        }
    
        // Menyimpan perubahan pada FotoProduk
        $fotoProduk->save();
    
        return back()->with('message', 'Produk berhasil diubah');
    }

    public function delete(Request $request){
        // Mengambil data produk yang akan dihapus berdasarkan $idProduk
        $idProduk = $request->idProduk;
        $produk = Product::find($idProduk);
        $fotoProduk = FotoProduct::find($idProduk);
        $gambar1 = 'assets/images/' . $produk->gambar;
        if(!empty($fotoProduk->fotoProduk)){
            $gambar2 = 'assets/images/' . $fotoProduk->fotoProduk;
        }
            
        if (!$produk || !$fotoProduk) {
            return back()->with('message', 'Produk tidak ditemukan');
        }
        
        if (Storage::disk('public')->exists($gambar1)) {
            Storage::disk('public')->delete($gambar1);
        }        
        if (Storage::disk('public')->exists($gambar2)) {
            Storage::disk('public')->delete($gambar2);
        }        
        // Hapus data dari Produk
        $produk->delete();
    
        // Hapus data dari FotoProduk
        $fotoProduk->delete();
    
        return back()->with('message', 'Produk berhasil diubah');
    }
    
}
