<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'produk';
    protected $fillable = [
        'id',
        'judul',
        'gambar',
        'ukuran',
        'deskripsi',
        'harga'
    ];
    use HasFactory;
}
