<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

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
                'vendor_id' => DB::table('vendors')->inRandomOrder()->first()->id,
                'service_name' => $faker->name,
                'description' => $faker->text,
                'price' => $faker->numberBetween(100000, 10000000),
            ]);
        }
    }
}
