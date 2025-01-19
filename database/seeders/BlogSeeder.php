<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Unsplash\HttpClient;
use Unsplash\Photo;
use Unsplash\Collection;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        HttpClient::init([
            'applicationId' => env('UNSPLASH_ACCESS_KEY'), // Key Anda di sini
            'secret' => env('UNSPLASH_SECRET_KEY'),
            'callbackUrl' => env('UNSPLASH_CALLBACK_URL'),
            'utmSource' => 'LUXIMA-API'
        ]);

        $collectionId = 'we1aS2RZQuM'; // Ganti dengan ID koleksi Anda

        // Ambil semua tags, users, dan categories
        $tags = Tag::all();


        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            $photo = Photo::random([
                'collections' => $collectionId,
                'orientation' => 'landscape',
            ]);
            $imageUrl = $photo->urls['regular']; // URL gambar dengan resolusi standar



            $blog = Blog::create([
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
                'image' => $imageUrl,
                'user_id' => User::query()->inRandomOrder()->first()->id,
                'category_id' => Category::query()->inRandomOrder()->first()->id
            ]);

            //Lampirkan Tags secara acak
            $randomTags = $tags->random(rand(1, 3));
            $blog->tags()->attach($randomTags->pluck('id')->toArray());
        }
    }
}
