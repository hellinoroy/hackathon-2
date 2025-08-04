<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Address;
use App\Models\User;
use Faker\Factory as Faker;

class AddressSeeder extends Seeder
{

    public function run(): void
    {
      
        $users = User::all();
        $faker = Faker::create();
        foreach ($users as $user) {
            for ($i = 0; $i < 2; $i++) {
                Address::create([
                    'user_id' => $user->id,
                    'address' => $faker->streetAddress,
                    'city' => $faker->city,
                    'state' => $faker->state,
                    'postal_code' => $faker->postcode,
                    'country' => $faker->country,
                ]);
            }
        }
    }
}
