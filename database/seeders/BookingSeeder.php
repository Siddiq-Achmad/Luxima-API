<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Booking;
use Faker\Factory as Faker;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $faker = Faker::create();

        for (
            $i = 0;
            $i < 30;
            $i++
        ) {
            Booking::create([
                'user_id' => $faker->numberBetween(1, 10),
                'vendor_id' => $faker->numberBetween(1, 10),
                'service_id' => $faker->numberBetween(1, 10),
                'location_id' => $faker->numberBetween(1, 10),
                'total_amount' => $faker->numberBetween(100000, 10000000),
                'status' => $faker->numberBetween(0, 1),

            ]);
        }
    }
}
