<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ReviewSeeder extends Seeder
{

    public function run(): void
    {
     
        $userIds = User::pluck('id')->all();
        $productIds = Product::pluck('id')->all();

        $faker = Faker::create();


        for ($i = 0; $i < 30; $i++) {
        
            $randomUserId = $faker->randomElement($userIds);
            $randomProductId = $faker->randomElement($productIds);
            Review::firstOrCreate([
                'user_id' => $randomUserId,
                'product_id' => $randomProductId,
            ], [
                'review' => $faker->paragraph(2),
            ]);
        }
    }
}
