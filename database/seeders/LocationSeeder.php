<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $locations = [
            ['city' => 'Banda Aceh', 'state' => 'Aceh', 'country' => 'Indonesia', 'postal_code' => '23111', 'slug' => 'banda-aceh'],
            ['city' => 'Aceh Besar', 'state' => 'Aceh', 'country' => 'Indonesia', 'postal_code' => '23911', 'slug' => 'aceh-besar'],
            ['city' => 'Sabang', 'state' => 'Aceh', 'country' => 'Indonesia', 'postal_code' => '24011', 'slug' => 'sabang'],
            ['city' => 'Langsa', 'state' => 'Aceh', 'country' => 'Indonesia', 'postal_code' => '24411', 'slug' => 'langsa'],
            ['city' => 'Lhokseumawe', 'state' => 'Aceh', 'country' => 'Indonesia', 'postal_code' => '24311', 'slug' => 'lhokseumawe'],
            ['city' => 'Subulussalam', 'state' => 'Aceh', 'country' => 'Indonesia', 'postal_code' => '24711', 'slug' => 'subulussalam'],
            ['city' => 'Aceh Utara', 'state' => 'Aceh', 'country' => 'Indonesia', 'postal_code' => '24361', 'slug' => 'aceh-utara'],
            ['city' => 'Bireuen', 'state' => 'Aceh', 'country' => 'Indonesia', 'postal_code' => '24211', 'slug' => 'bireuen'],
            ['city' => 'Pidie', 'state' => 'Aceh', 'country' => 'Indonesia', 'postal_code' => '24111', 'slug' => 'pidie'],
            ['city' => 'Pidie Jaya', 'state' => 'Aceh', 'country' => 'Indonesia', 'postal_code' => '24181', 'slug' => 'pidie-jaya'],
            ['city' => 'Aceh Singkil', 'state' => 'Aceh', 'country' => 'Indonesia', 'postal_code' => '24781', 'slug' => 'aceh-singkil'],
            ['city' => 'Nagan Raya', 'state' => 'Aceh', 'country' => 'Indonesia', 'postal_code' => '23611', 'slug' => 'nagan-raya'],
            ['city' => 'Simeulue', 'state' => 'Aceh', 'country' => 'Indonesia', 'postal_code' => '24711', 'slug' => 'simeulue'],
            ['city' => 'Gayo Lues', 'state' => 'Aceh', 'country' => 'Indonesia', 'postal_code' => '24611', 'slug' => 'gayo-lues'],
            ['city' => 'Aceh Tengah', 'state' => 'Aceh', 'country' => 'Indonesia', 'postal_code' => '24611', 'slug' => 'aceh-tengah'],
            ['city' => 'Aceh Barat', 'state' => 'Aceh', 'country' => 'Indonesia', 'postal_code' => '23611', 'slug' => 'aceh-barat'],
            // Tambahkan lebih banyak kota atau kabupaten sesuai kebutuhan
        ];

        foreach ($locations as $location) {
            Location::create($location);
        }
    }
}
