<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qna extends Model
{
    use HasFactory;

    protected $table = 'qna'; // Nama tabel di database
    protected $fillable = ['pertanyaan', 'jawaban']; // Kolom yang dapat diisi
}
