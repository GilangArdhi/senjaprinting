<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackRecord extends Model
{
    protected $fillable = ['id', 'user_id', 'page_visited', 'visit_start', 'updated_at', 'created_at'];

    // Definisikan hubungan atau metode lain sesuai kebutuhan

    // Contoh metode untuk mendapatkan durasi kunjungan
    public function getVisitDurationAttribute()
    {
        return optional($this->updated_at)->diffInMinutes($this->visit_start);
    }

    use HasFactory;
}
