<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';

    public $timestamps = false;

    protected $fillable = [
        'tanggal',
        'judul',
        'kategori',
        'status',
        'artikel',
        'gambar',
    ];
}
