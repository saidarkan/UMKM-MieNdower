<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $table = 'promos';

    public $timestamps = false;

    protected $fillable = [
        'nama_promo',
        'jenis_promo',
        'deskripsi_promo',
        'gambar_promo',
        'tanggal_promo',
        'tanggal_berakhir',
    ];

    protected $dates = [
        'tanggal_promo',
    ];



    protected $primaryKey = 'id';
}
