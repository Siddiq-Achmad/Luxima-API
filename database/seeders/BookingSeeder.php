<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Booking;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

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
                'user_id' => DB::table('users')->inRandomOrder()->first()->id,
                'vendor_id' => DB::table('vendors')->inRandomOrder()->first()->id,
                'service_id' => DB::table('services')->inRandomOrder()->first()->id,
                'location_id' => DB::table('locations')->inRandomOrder()->first()->id,
                'total_amount' => $faker->numberBetween(100000, 10000000),
                'status' => $faker->numberBetween(0, 1),

            ]);
        }
    }
}
