<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;
use Faker\Factory as Faker;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        for ($i = 0; $i < 30; $i++) {
            Vendor::create([
                'name' => $faker->company,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'slug' => $faker->slug,
                'description' => $faker->text,
                'instagram' => $faker->url,
                'facebook' => $faker->url,
                'tiktok' => $faker->url,
                'verified' => $faker->numberBetween(0, 1),
                'status' => $faker->numberBetween(0, 1),
                'image' => $faker->imageUrl(640, 480, 'wedding', true),
                'user_id' => $faker->numberBetween(1, 10),
                'location_id' => $faker->numberBetween(1, 10),
                'category_id' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
