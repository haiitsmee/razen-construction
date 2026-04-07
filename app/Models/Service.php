<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title', 'slug', 'image', 'category_label', 'short_description', 'long_description', 'features', 'testimonial_text', 'testimonial_author'];

    protected $casts = [
        'features' => 'array',
    ];
}
