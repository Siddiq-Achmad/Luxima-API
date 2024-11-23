<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Blog;
use Unsplash\Photo;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            $photo = Photo::random(['query' => 'wedding']);
            $imageUrl = $photo->urls['regular']; // URL gambar dengan resolusi standar

            Blog::create([
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
                'tags' => $faker->words(3, true),
                'image' => $imageUrl,
                'user_id' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
