<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;
use Faker\Factory as Faker;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        for ($i = 0; $i < 30; $i++) {
            Review::create([
                'user_id' => $faker->numberBetween(1, 10),
                'vendor_id' => $faker->numberBetween(1, 10),
                'service_id' => $faker->numberBetween(1, 10),
                'rating' => $faker->numberBetween(1, 5),
                'comment' => $faker->text,
            ]);
        }
    }
}
