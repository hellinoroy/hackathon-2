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
        'is_new',
        'is_best_seller',
    ];

    // Relasi dengan tabel product_images (jika ada galeri)
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
