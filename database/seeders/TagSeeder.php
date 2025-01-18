<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $tags = [
            'Technology',
            'Business',
            'Health',
            'Education',
            'Lifestyle',
            'Travel',
            'Food',
            'Entertainment',
            'Sports',
            'Fashion',
            'Wedding',
            'Art',
            'Music',
            'Photography',
            'Gaming',
            'Science',
            'Politics',
            'Environment',
            'Religion',
            'History',
            'Culture',
        ];

        foreach ($tags as $tag) {
            Tag::create([
                'name' => $tag,
                'slug' => str_replace(' ', '-', strtolower($tag)),
            ]);
        }
    }
}
