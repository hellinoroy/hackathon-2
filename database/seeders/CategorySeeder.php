<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    public function run(): void
    {
        $categories = [
            'Floral',
            'Woody',
            'Fresh',
            'Spicy',
        ];

        foreach ($categories as $categoryName) {
            Category::create([
                'name' => $categoryName,
            ]);
        }
    }
}
