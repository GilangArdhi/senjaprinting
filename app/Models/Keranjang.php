<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $fillable = [
        'id_produk',
        'id_pelanggan',
        'qty',
        'ukurandipesan',
        'has_bought'
    ];
    use HasFactory;
}
