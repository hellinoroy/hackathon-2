<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userIds = User::pluck('id')->all();
        $productIds = Product::pluck('id')->all();

        $faker = Faker::create();


        foreach ($userIds as $userId) {
            // Keep track of products added to this user's cart to prevent duplicates
            $addedProductIds = [];

            // Loop 5 times to add 5 items to the cart
            for ($i = 0; $i < 5; $i++) {
                // Find a product that is not already in the current user's cart
                do {
                    $randomProductId = $faker->randomElement($productIds);
                } while (in_array($randomProductId, $addedProductIds));

                // Add the product to the list of products for this user's cart
                $addedProductIds[] = $randomProductId;

                // Create the cart item
                Cart::create([
                    'user_id' => $userId,
                    'product_id' => $randomProductId,
                    'quantity' => $faker->numberBetween(1, 5),
                ]);
            }
        }
    }
}
