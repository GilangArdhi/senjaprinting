<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function setStatusPending() {
        $this->attributes['status'] = 'Proses';
        self::save();
    }

    public function setStatusSuccess() {
        $this->attributes['status'] = 'Sukses';
        self::save();
    }

    public function setStatusFailed() {
        $this->attributes['status'] = 'Gagal';
        self::save();
    }

    public function setStatusExpired() {
        $this->attributes['status'] = 'Kadaluwarsa';
        self::save();
    }
}