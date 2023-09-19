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

    public function details($id){
        $product = Product::where('id', $id)->get();
        $foto = FotoProduct::where('id_produk', $id)->get();
        
        return view('admin.editProduk', ['product' => $product, 'foto' => $foto]);
    }

    public function edit(Request $request){
        // Mengambil data produk yang akan diubah berdasarkan $idProduk
        $idProduk = $request->idProduk;
        $idGambar2 = $request->idFoto2;
        $idGambar3 = $request->idFoto3;
        $idGambar4 = $request->gambar4;
        $produk = Product::find($idProduk);
        $fotoProduk2 = FotoProduct::find($idGambar2);
        $fotoProduk3 = FotoProduct::find($idGambar3);
        $fotoProduk4 = FotoProduct::find($idGambar4);
        
        if (!$produk) {
            return back()->with('message', 'Produk tidak ditemukan');
        }
    
        // Update nilai Produk
        $produk->judul = $request->nama;
        // $produk->gambarUtama = $request->gambar1;
        $produk->ukuran = $request->ukuran;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
    
        if ($request->hasFile('gambar1')) {
            //delete
            $gambar = 'assets/images/' . $produk->gambar;
            Storage::disk('public')->delete($gambar);
            //update
            $gambarUtama = $request->file('gambar1');
            $filenameGambarUtama = date('Y-m-d') . $gambarUtama->getClientOriginalName();
            $path = 'assets/images/' . $filenameGambarUtama;
            Storage::disk('public')->put($path, file_get_contents($gambarUtama));
            $produk->gambar = $filenameGambarUtama;
        } 
        
        // Menyimpan perubahan pada Produk
        $produk->save();
        
        if ($request->hasFile('gambar2')) {
            //delete
            $gambar = 'assets/images/' . $fotoProduk2->fotoProduk;
            Storage::disk('public')->delete($gambar);
            //update
            $gambarUtama = $request->file('gambar2');
            $filename2 = date('Y-m-d') . $gambarUtama->getClientOriginalName();
            $path = 'assets/images/' . $filename2;
            Storage::disk('public')->put($path, file_get_contents($gambarUtama));
            $fotoProduk2->fotoProduk = $filename2;

            $fotoProduk2->save();
        } 
        
        if (!empty($fotoProduk3)){
            if ($request->hasFile('gambar3')) {
                //delete
                $gambar = 'assets/images/' . $fotoProduk3->fotoProduk;
                Storage::disk('public')->delete($gambar);
                //update
                $gambarUtama = $request->file('gambar3');
                $filename3 = date('Y-m-d') . $gambarUtama->getClientOriginalName();
                $path = 'assets/images/' . $filename3;
                Storage::disk('public')->put($path, file_get_contents($gambarUtama));
                $fotoProduk3->fotoProduk = $filename3;
    
                $fotoProduk3->save();
            } 
        } else if ($request->hasFile('gambar3')){
            // dd($request->hasFile('gambar3'));
            $gambar3 = $request -> file('gambar3');
            $filenameGambar3 = date('Y-m-d').$gambar3->getClientOriginalName();
            $path = 'assets/images/'.$filenameGambar3;
            Storage::disk('public')->put($path, file_get_contents($gambar3));

            $insertFt = FotoProduct::create([    
                
                'fotoProduk' => $filenameGambar3,
                'id_produk' => $idProduk
            
            ]);
        } 
        // Fungsi untuk mengupdate atau menambahkan foto produk
        // function updateOrInsertFotoProduct($fotoProduk, $request, $idProduk) {
        //     if ($request->hasFile('gambar')) {
        //         $gambar = $request->file('gambar');
        //         $filenameGambar = date('Y-m-d') . $gambar->getClientOriginalName();
        //         $path = 'assets/images/' . $filenameGambar;
        //         Storage::disk('public')->put($path, file_get_contents($gambar));
        
        //         if ($fotoProduk) {
        //             // Update nilai FotoProduk
        //             $fotoProduk->fotoProduk = $filenameGambar;
        //             $fotoProduk->save();
        //         } else {
        //             // Membuat objek baru jika tidak ada yang ada
        //             FotoProduct::create([
        //                 'fotoProduk' => $filenameGambar,
        //                 'id_produk' => $idProduk
        //             ]);
        //         }
        //     }
        // }
    
        // // Memanggil fungsi untuk mengupdate atau menambahkan foto produk
        // updateOrInsertFotoProduct($fotoProduk2, $request, $idProduk);
        // updateOrInsertFotoProduct($fotoProduk3, $request, $idProduk);
        // updateOrInsertFotoProduct($fotoProduk4, $request, $idProduk);
        
        return redirect('/dashboard')->with('message', 'Produk berhasil diubah');
    }
    

    public function delete(Request $request){
        // Mengambil data produk yang akan dihapus berdasarkan $idProduk
        $idProduk = $request->idProduk;
        $produk = Product::find($idProduk);
        $fotoProduk = FotoProduct::where('id_produk', $idProduk)->get();
        $gambar1 = 'storage/assets/images/' . $produk->gambar;
        // if(!empty($fotoProduk->fotoProduk)){
        //     $gambar2 = 'storage/assets/images/' . $fotoProduk->fotoProduk;
        // }
            
        if (!$produk || !$fotoProduk) {
            return back()->with('message', 'Produk tidak ditemukan');
        }
        
        foreach ($fotoProduk as $foto) {
            $gambar = 'storage/assets/images/' . $foto->fotoProduk;
            if (Storage::disk('public')->exists($gambar)) {
                Storage::disk('public')->delete($gambar);
            }
            // Hapus entri FotoProduk
            $fotoProduk->delete();
        }
        // if (Storage::disk('public')->exists($gambar1)) {
        //     Storage::disk('public')->delete($gambar1);
        // }        
        // if (Storage::disk('public')->exists($gambar2)) {
        //     Storage::disk('public')->delete($gambar2);
        // }
        // Hapus data dari Produk
        $produk->delete();
    
        // Hapus data dari FotoProduk
        // $fotoProduk->delete();
    
        return back()->with('message', 'Produk berhasil diubah');
    }
    
}
