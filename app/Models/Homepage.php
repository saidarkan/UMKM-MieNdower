<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    use HasFactory;
    

    // Nama tabel dalam database
    protected $table = 'homepages';

    // Kolom yang dapat diisi melalui mass assignment
    protected $fillable = [
        'pembuka',
        'judul1',
        'judul2',
        'deskripsi_judul',
        'subjudul',
        'deskripsi_subjudul',
        'gambar',
    ];

    // Menonaktifkan timestamps jika tabel tidak memiliki kolom created_at dan updated_at
    public $timestamps = false;
}
