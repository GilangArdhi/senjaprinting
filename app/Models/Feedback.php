<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'id_produk',
        'id_pelanggan',
        'comment'
    ];
    use HasFactory;
}
