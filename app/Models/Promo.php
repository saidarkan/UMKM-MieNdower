<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    // Tentukan nama tabel yang digunakan oleh model (jika berbeda dari nama default)
    protected $table = 'promos';

    protected $fillable = [
        'nama_promo',
        'deskripsi_promo',
        'gambar_promo',
        'tanggal_promo',
    ];

    // Tentukan format tanggal yang digunakan (jika diperlukan)
    protected $dates = [
        'tanggal_promo',
    ];

    // Jika menggunakan atribut gambar, Anda bisa menggunakan accessor atau mutator untuk penanganan gambar
    public function getGambarPromoAttribute($value)
    {
        // Menampilkan URL lengkap gambar jika gambar disimpan di storage
        return asset('storage/' . $value);
    }
}
