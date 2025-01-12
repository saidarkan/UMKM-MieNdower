<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    use HasFactory;

    // Nama tabel dalam database
    protected $table = 'homepage';

    // Kolom yang dapat diisi melalui mass assignment
    protected $fillable = [
        'judul',
        'deskripsi_judul',
        'subjudul',
        'deskripsi_subjudul',
        'gambar',
    ];

    public $timestamps = false; // Ubah ke true jika tabel memiliki kolom timestamps
}
