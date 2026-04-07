<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'slug', 
        'category', 
        'client_name', 
        'location', 
        'year', 
        'image', 
        'description', 
        'specifications',
        'gallery',
    ];

    // TAMBAHKAN KODE INI
    protected $casts = [
        'specifications' => 'array',
        'gallery' => 'array', // Tambahkan ini
    ];
}