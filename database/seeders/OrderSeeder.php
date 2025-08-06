<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use App\Models\Product;
use Faker\Factory as Faker;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all user and product IDs
        $userIds = User::pluck('id')->all();
        $products = Product::all();

        $faker = Faker::create();

        // Create 20 orders
        for ($i = 0; $i < 20; $i++) {
            // Select a random user to own the order
            $randomUserId = $faker->randomElement($userIds);
            $totalPrice = 0;

            // Generate a random message (or leave it null for some orders)
            $message = $faker->boolean(70)  // 70% chance of having a message
                ? $faker->sentence(10)  // Generate a message with ~10 words
                : null;

            // Create the order with the message
            $order = Order::create([
                'user_id' => $randomUserId,
                'total_price' => 0, // Placeholder, will be updated later
                'status' => $faker->randomElement(['pending', 'processing', 'completed', 'cancelled']),
                'message' => $message,
            ]);

            // Keep track of products added to this order to prevent duplicates
            $addedProductIds = [];

            // For each order, create 2 to 5 order details
            $numberOfItems = $faker->numberBetween(2, 5);
            for ($j = 0; $j < $numberOfItems; $j++) {
                // Find a product that is not already in this order
                do {
                    $randomProduct = $faker->randomElement($products);
                } while (in_array($randomProduct->id, $addedProductIds));

                $addedProductIds[] = $randomProduct->id;

                $quantity = $faker->numberBetween(1, 3);
                $itemPrice = $randomProduct->price;
                $subtotal = $quantity * $itemPrice;
                $totalPrice += $subtotal;

                OrderDetail::create([
                    'order_id' => $order->id,
                    'product_id' => $randomProduct->id,
                    'quantity' => $quantity,
                    'price' => $itemPrice,
                ]);
            }

            // Update the order's total price
            $order->update(['total_price' => $totalPrice]);
        }
    }
}
