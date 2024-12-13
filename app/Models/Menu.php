<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public $timestamps = false;

    // Define the table name (optional, Laravel uses plural form by default)
    protected $table = 'menus';

    // Define the columns that are mass assignable
    protected $fillable = [
        'nama_menu',
        'jenis_menu',
        'deskripsi_menu',
        'harga_menu',
        'gambar_menu',

    ];

    // If you're using timestamps, Laravel will automatically manage them
    // If your table does not have 'created_at' and 'updated_at' columns, you can disable timestamps like this:
    // public $timestamps = false;
}
