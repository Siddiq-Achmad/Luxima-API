<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

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
            // Ambil data yang ada
            $user = DB::table('users')->inRandomOrder()->first();
            $vendor = DB::table('vendors')->inRandomOrder()->first();
            $service = DB::table('services')->inRandomOrder()->first();
            $event = DB::table('events')->inRandomOrder()->first();

            // Check apakah data ada
            if (!$user || !$vendor) {
                return;
            }
            Review::create([
                'user_id' => $user->id,
                'vendor_id' => $vendor->id,
                'service_id' => $service?->id, // Gunakan null safe operator (PHP 8+)
                'event_id' => $event?->id, // Gunakan null safe operator (PHP 8+)
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
                'rating' => $faker->numberBetween(1, 5),
            ]);
        }
    }
}
