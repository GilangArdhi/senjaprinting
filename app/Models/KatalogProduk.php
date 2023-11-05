<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KatalogProduk extends Model
{
    protected $table = 'katalog';
    protected $fillable = [
        'id',
        'gambar',
        'katalog',
    ];
    use HasFactory;
}
