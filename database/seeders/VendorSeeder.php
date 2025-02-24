<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Location;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;
use App\Models\Service;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Unsplash\HttpClient;
use Unsplash\Photo;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use App\Models\Tag;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // HttpClient::init([
        //     'applicationId' => env('UNSPLASH_ACCESS_KEY'), // Key Anda di sini
        //     'secret' => env('UNSPLASH_SECRET_KEY'),
        //     'callbackUrl' => env('UNSPLASH_CALLBACK_URL'),
        //     'utmSource' => 'LUXIMA-API'
        // ]);

        // $images = Cache::remember('unsplash_images', now()->addHours(1), function () {
        //     $photo = Photo::random([
        //         'query' => 'Fashion & Beauty',
        //         'orientation' => 'squarish'
        //     ]);
        //     return $photo->urls['regular']; // Ambil URL gambar dari Unsplash
        // });

        $faker = Faker::create();

        // Ambil semua tags, users, dan categories
        $tags = Tag::all();

        $collectionId = 'we1aS2RZQuM'; // Ganti dengan ID koleksi Anda

        // Ambil gambar dari cache atau Unsplash jika belum ada
        $images = Cache::remember("unsplash_collection_{$collectionId}", now()->addHours(1), function () use ($collectionId) {
            $photo = Photo::random([
                'collections' => $collectionId,
                'orientation' => 'landscape'
            ]);
            return $photo->urls['regular'];
        });


        $vendor = Vendor::create([
            'slug' => 'luxima-photography',
            'name' => 'Luxima Photography',
            'address' => 'Jl. Mohd. Hasan No. 257, Banda Aceh',
            'rating' => 4.8,
            'review_count' => 24,
            'description' => 'Penyedia layanan fotografi profesional untuk pernikahan.',
            'image' => 'https://images.unsplash.com/photo-1531297484001-80022131f5a1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
            'is_featured' => true,
            'verified' => true,
            'is_active' => true,
            'gallery' => [$images, $images, $images],
            'owner' => [
                'name' => 'Siddiq',
                'email' => 'siddiq@luxima.id',
                'avatar' => 'https://siddiq.luxima.id/img/avatars/me.jpg',
                'bio' => 'Profesional di bidang fotografi pernikahan.',
                'phone' => '+628116111662',
                'socialMedia' => [
                    'facebook' => 'https://facebook.com/siddiq.dizy',
                    'instagram' => 'https://instagram.com/siddiqachmad',
                    'twitter' => 'https://twitter.com/siddiqachmad',
                    'whatsapp' => 'https://wa.me/628116111662'
                ],
            ],
            'contact' => [
                'phone' => '+628123456789',
                'email' => 'hello@luxima.com'
            ],
            'social' => [
                'instagram' => 'https://instagram.com/luxima_photography',
                'facebook' => 'https://facebook.com/luxima_photography',
                'twitter' => 'https://twitter.com/luxima_photo',
                'tiktok' => 'https://tiktok.com/@luxima',
                'youtube' => 'https://youtube.com/luxima'
            ],
            'working_hours' => [
                'open' => '09:00',
                'close' => '21:00'
            ],
            'coordinates' => [
                'lat' => -6.200000,
                'lng' => 106.816666
            ],
            'meta' => [
                'title' => 'Luxima Photography - Fotografi Pernikahan Profesional',
                'keywords' => 'wedding, photography, luxury, pre-wedding',
                'description' => 'Penyedia layanan fotografi terbaik untuk pernikahan dan event spesial Anda.'
            ],
            'user_id' => User::query()->inRandomOrder()->first()->id,
            'location_id' => Location::query()->inRandomOrder()->first()->id,
            'category_id' => Category::query()->inRandomOrder()->first()->id,

        ]);

        $randomTags = $tags->random(rand(1, 3));
        $vendor->tags()->attach($randomTags->pluck('id')->toArray());

        $services = [
            ['vendor_id' => $vendor->id, 'service_name' => 'Studio Photography', 'description' => 'Layanan foto Studio', 'price' => 300000],
            ['vendor_id' => $vendor->id, 'service_name' => 'Pre-Wedding Photography', 'description' => 'Layanan foto pre-wedding', 'price' => 5000000],
            ['vendor_id' => $vendor->id, 'service_name' => 'Wedding Photography', 'description' => 'Layanan foto saat acara pernikahan', 'price' => 10000000],
        ];

        Service::insert($services);

        for ($i = 0; $i < 12; $i++) {

            $images = Cache::remember("unsplash_collection_{$collectionId}_{$i}", now()->addHours(1), function () use ($collectionId) {
                $photo = Photo::random([
                    'collections' => $collectionId,
                    'orientation' => 'landscape'
                ]);
                return $photo->urls['regular'];
            });

            $vendor = Vendor::create([
                'slug' => $faker->slug(),
                'name' => $faker->company(),
                'address' => $faker->address(),
                'rating' => $faker->randomFloat(2, 1, 5),
                'review_count' => $faker->numberBetween(0, 100),
                'description' => $faker->text(),
                'image' => $images,
                'is_featured' => $faker->boolean(),
                'verified' => $faker->boolean(),
                'is_active' => $faker->boolean(),
                'gallery' => [$images, $images, $images],
                'owner' => [
                    'name' => $faker->name(),
                    'email' => $faker->email(),
                    'avatar' => $faker->imageUrl(),
                    'bio' => $faker->text(),
                    'phone' => $faker->phoneNumber(),
                    'socialMedia' => [
                        'facebook' => $faker->url(),
                        'instagram' => $faker->url(),
                        'twitter' => $faker->url(),
                        'whatsapp' => $faker->url()
                    ],
                ],
                'contact' => [
                    'phone' => $faker->phoneNumber(),
                    'email' => $faker->email()
                ],
                'social' => [
                    'instagram' => $faker->url(),
                    'facebook' => $faker->url(),
                    'twitter' => $faker->url(),
                    'tiktok' => $faker->url(),
                    'youtube' => $faker->url()
                ],
                'working_hours' => [
                    'open' => $faker->time(),
                    'close' => $faker->time()
                ],
                'coordinates' => [
                    'lat' => $faker->latitude(),
                    'lng' => $faker->longitude()
                ],
                'meta' => [
                    'title' => $faker->sentence(),
                    'keywords' => $faker->words(3, true),
                    'description' => $faker->sentence()
                ],
                'user_id' => User::query()->inRandomOrder()->first()->id,
                'location_id' => Location::query()->inRandomOrder()->first()->id,
                'category_id' => Category::query()->inRandomOrder()->first()->id,

            ]);

            //Lampirkan Tags secara acak
            $randomTags = $tags->random(rand(1, 3));
            $vendor->tags()->attach($randomTags->pluck('id')->toArray());

            // Tambahkan layanan ke vendor
            $services = [
                ['vendor_id' => $vendor->id, 'service_name' => $faker->sentence(), 'description' => $faker->sentence(), 'price' => $faker->numberBetween(100000, 10000000)],
                ['vendor_id' => $vendor->id, 'service_name' => $faker->sentence(), 'description' => $faker->sentence(), 'price' => $faker->numberBetween(100000, 10000000)]
            ];

            Service::insert($services);
        }
    }
}
