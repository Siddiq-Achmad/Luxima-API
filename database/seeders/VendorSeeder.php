<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Location;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Unsplash\HttpClient;
use Unsplash\Photo;

class VendorSeeder extends Seeder
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
        $faker = Faker::create();

        for ($i = 0; $i < 30; $i++) {
            $photo = Photo::random(['query' => 'Fashion & Beauty']);
            $imageUrl = $photo->urls['regular']; // URL gambar dengan resolusi standar
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
                'image' => $imageUrl,
                'user_id' => User::query()->inRandomOrder()->first()->id,
                'location_id' => Location::query()->inRandomOrder()->first()->id,
                'category_id' => Category::query()->inRandomOrder()->first()->id
            ]);
        }
    }
}
