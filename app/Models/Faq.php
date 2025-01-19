<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faq extends Model
{
    public $timestamps = false;

    protected $table = 'faqs';

    use HasFactory;

    protected $fillable = [
        'pertanyaan',
        'jawaban',

    ];




}
