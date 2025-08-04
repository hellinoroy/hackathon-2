<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class ProductSeeder extends Seeder
{

    public function run(): void
    {

        $categoryIds = Category::pluck('id')->all();

        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'name' => $faker->words(3, true),
                'description' => $faker->paragraph(2),
                'image_path' => $faker->imageUrl(640, 480, 'food'),
                'ingredient' => $faker->words(5, true),
                'quantity' => $faker->numberBetween(1, 200),
                'price' => $faker->numberBetween(10, 1000),
                'category_id' => $faker->randomElement($categoryIds),
            ]);
        }
    }
}
