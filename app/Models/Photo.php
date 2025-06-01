<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi',
        'cover',
        'photos',
    ];

    protected $casts = [
        'photos' => 'array',
    ];
}
