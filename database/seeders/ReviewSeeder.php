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
            Review::create([
                'user_id' => DB::table('users')->inRandomOrder()->first()->id,
                'vendor_id' => DB::table('vendors')->inRandomOrder()->first()->id,
                'service_id' => DB::table('services')->inRandomOrder()->first()->id,
                'rating' => $faker->numberBetween(1, 5),
                'comment' => $faker->text,
            ]);
        }
    }
}
