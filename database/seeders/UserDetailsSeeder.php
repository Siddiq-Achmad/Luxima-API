<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;
use App\Models\UserDetail;
use Unsplash\HttpClient;
use Unsplash\Photo;

class UserDetailsSeeder extends Seeder
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

        for ($i = 0; $i < 12; $i++) {
            $avatar = Photo::random(['query' => 'avatar', 'orientation' => 'squarish']);
            $avatarUrl = $avatar->urls['regular'];
            UserDetail::create([
                'user_id' => User::query()->inRandomOrder()->first()->id,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'birth_date' => $faker->date(),
                'gender' => $faker->randomElement(['male', 'female']),
                'avatar' => $avatarUrl,
                'nationality' => $faker->country,
                'occupation' => $faker->jobTitle,
                'bio' => $faker->text,
                'social_media' => json_encode([
                    'instagram' => $faker->url,
                    'facebook' => $faker->url,
                    'tiktok' => $faker->url,
                    'twitter' => $faker->url,
                    'linkedin' => $faker->url,
                    'youtube' => $faker->url,
                    'website' => $faker->url,
                    'telegram' => $faker->url,
                    'whatsapp' => $faker->url,
                ]),
            ]);
        }
    }
}
