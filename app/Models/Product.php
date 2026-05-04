<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'sizes',          // JSON
        'colors',         // JSON
        'packaging',
        'image',
    ];

    protected $casts = [
        'sizes'  => 'array',   // ប្រែ JSON ទៅ array ស្វ័យប្រវត្តិ
        'colors' => 'array',
    ];

}
