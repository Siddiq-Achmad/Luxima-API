<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
use Faker\Factory as Faker;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $faker = Faker::create();

        for ($i = 0; $i < 30; $i++) {
            Service::create([
                'vendor_id' => $faker->numberBetween(1, 10),
                'service_name' => $faker->name,
                'description' => $faker->text,
                'price' => $faker->numberBetween(100000, 10000000),
            ]);
        }
    }
}
