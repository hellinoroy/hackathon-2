<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'short_description',
        'story',
        'notes_top',
        'notes_middle',
        'notes_base',
        'main_image',
        'price',
    ];

    // Relasi dengan tabel product_images (jika ada galeri)
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
