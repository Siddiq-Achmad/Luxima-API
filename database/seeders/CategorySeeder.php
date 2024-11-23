<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = [
            [
                'name' => 'Wedding Planners',
                'description' => 'Professional wedding planning services.',
                'slug' => 'wedding-planners',
                'image' => 'image1.jpg',
                'status' => '1',
                'featured' => '0',
                'popular' => '1',
                'trending' => '0',
                'meta_title' => 'Best Wedding Planners',
                'meta_description' => 'Find the best wedding planners for your special day.',
                'meta_keywords' => 'wedding, planner, services',
            ],
            [
                'name' => 'Photographers',
                'description' => 'Capture your special moments with our photographers.',
                'slug' => 'photographers',
                'image' => 'image2.jpg',
                'status' => '1',
                'featured' => '1',
                'popular' => '0',
                'trending' => '1',
                'meta_title' => 'Top Wedding Photographers',
                'meta_description' => 'Explore our list of top wedding photographers.',
                'meta_keywords' => 'photography, wedding, services',
            ],
            [
                'name' => 'Caterers',
                'description' => 'Catering services for your special events.',
                'slug' => 'caterers',
                'image' => 'image3.jpg',
                'status' => '1',
                'featured' => '0',
                'popular' => '0',
                'trending' => '0',
                'meta_title' => 'Best wedding Caterers',
                'meta_description' => 'Find the best caterers for your special day.',
                'meta_keywords' => 'catering, services',
            ],
            [
                'name' => 'Decorators',
                'description' => 'Professional weddings decoration services.',
                'slug' => 'decorators',
                'image' => 'image4.jpg',
                'status' => '1',
                'featured' => '0',
                'popular' => '0',
                'trending' => '0',
                'meta_title' => 'Best weddings Decorators',
                'meta_description' => 'Find the best wedding decorators for your special day.',
                'meta_keywords' => 'decorator, services',
            ],
            [
                'name' => 'Makeup Artists',
                'description' => 'Professional makeup artists for your special day.',
                'slug' => 'makeup-artists',
                'image' => 'image5.jpg',
                'status' => '1',
                'featured' => '0',
                'popular' => '0',
                'trending' => '0',
                'meta_title' => 'Best weddings Makeup Artists',
                'meta_description' => 'Find the best makeup artists for your special day.',
                'meta_keywords' => 'makeup, artist, services',
            ],
            [
                'name' => 'Venues',
                'description' => 'Professional venues for your special day.',
                'slug' => 'venues',
                'image' => 'image6.jpg',
                'status' => '1',
                'featured' => '0',
                'popular' => '0',
                'trending' => '0',
                'meta_title' => 'Best weddings Venues',
                'meta_description' => 'Find the best venues for your special day.',
                'meta_keywords' => 'venue, services',
            ],
            [
                'name' => 'Florists',
                'description' => 'Professional flowers for your special day.',
                'slug' => 'florists',
                'image' => 'image7.jpg',
                'status' => '1',
                'featured' => '0',
                'popular' => '0',
                'trending' => '0',
                'meta_title' => 'Best weddings Florists',
                'meta_description' => 'Find the best flowers for your special day.',
                'meta_keywords' => 'flowers, services',
            ],
            [
                'name' => 'Ceremonial Services',
                'description' => 'Ceremonial services for your special day.',
                'slug' => 'ceremonial-services',
                'image' => 'image8.jpg',
                'status' => '1',
                'featured' => '0',
                'popular' => '0',
                'trending' => '0',
                'meta_title' => 'Best weddings Ceremonial Services',
                'meta_description' => 'Find the best ceremonial services for your special day.',
                'meta_keywords' => 'ceremonial, services',
            ],
            [
                'name' => 'Decoration',
                'description' => 'Professional decorations for your special day.',
                'slug' => 'decorations',
                'image' => 'image9.jpg',
                'status' => '1',
                'featured' => '0',
                'popular' => '0',
                'trending' => '0',
                'meta_title' => 'Best weddings Decorations',
                'meta_description' => 'Find the best decorations for your special day.',
                'meta_keywords' => 'decorations, services',
            ],
            [
                'name' => 'Rental Services',
                'description' => 'Rental services for your special day.',
                'slug' => 'rental-services',
                'image' => 'image10.jpg',
                'status' => '1',
                'featured' => '0',
                'popular' => '0',
                'trending' => '0',
                'meta_title' => 'Best weddings Rental Services',
                'meta_description' => 'Find the best rental services for your special day.',
                'meta_keywords' => 'rental, services',
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
