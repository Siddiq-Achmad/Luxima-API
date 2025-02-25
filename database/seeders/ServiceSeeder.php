<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Unsplash\Photo;
use Illuminate\Support\Facades\Cache;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $faker = Faker::create();
        $collectionId = 'we1aS2RZQuM'; // Ganti dengan ID koleksi Anda

        for ($i = 0; $i < 12; $i++) {
            $images = Cache::remember("unsplash_collection_{$collectionId}_{$i}", now()->addHours(1), function () use ($collectionId) {
                $photo = Photo::random([
                    'collections' => $collectionId,
                ]);
                return $photo->urls['regular'];
            });
            Service::create([
                'vendor_id' => DB::table('vendors')->inRandomOrder()->first()->id,
                'title' => $faker->name,
                'description' => $faker->text,
                'image' => $images,
                'thumbnail' => $images,
                'status' => $faker->boolean(),
                'unit' => $faker->word,
                'duration' => $faker->numberBetween(1, 10),
                'price' => $faker->numberBetween(100000, 10000000),
                'discount' => $faker->numberBetween(0, 10),
                'discount_price' => $faker->numberBetween(100000, 10000000),
                'views' => $faker->numberBetween(0, 100),
                'likes' => $faker->numberBetween(0, 100),
                'dislikes' => $faker->numberBetween(0, 100),
                'rating' => $faker->numberBetween(0, 5),
                'review_count' => $faker->numberBetween(0, 100),
            ]);
        }
    }
}
