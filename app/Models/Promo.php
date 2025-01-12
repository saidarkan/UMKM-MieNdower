<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $table = 'promos';

    protected $fillable = [
        'nama_promo',
        'deskripsi_promo',
        'gambar_promo',
        'tanggal_promo',
    ];

    protected $dates = [
        'tanggal_promo',
    ];


    public function getGambarPromoAttribute($value)
    {
        return asset('storage/' . $value);
    }
}
