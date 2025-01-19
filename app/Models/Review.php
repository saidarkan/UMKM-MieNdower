<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'reviews';

    // Kolom yang dapat diisi oleh user
    protected $fillable = [
        'rating',
        'comment',
        'nama',
        'menu_id',  // Ini untuk relasi dengan menu
    ];

    // Relasi dengan Menu (Review belongs to Menu)
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}

