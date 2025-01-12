<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $timestamps = false;

    // Define the table name (optional, Laravel uses plural form by default)
    protected $table = 'contacts';

    // Define the columns that are mass assignable
    protected $fillable = [
        'nama_medsos',
        'icon_medsos',
        'link_medsos',

    ];
}
