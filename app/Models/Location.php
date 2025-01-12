<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $timestamps = false;

    // Define the table name (optional, Laravel uses plural form by default)
    protected $table = 'locations';

    // Define the columns that are mass assignable
    protected $fillable = [
        'nama_lokasi',
        'alamat_lokasi',
        'link_lokasi',

    ];
}
