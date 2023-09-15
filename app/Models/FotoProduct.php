<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoProduct extends Model
{
    protected $fillable = [
        'fotoProduk',
        'id_produk'
    ];
    use HasFactory;
}
