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
            ['city' => 'Aceh Jaya', 'state' => 'Aceh', 'country' => 'Indonesia', 'postal_code' => '23811', 'slug' => 'aceh-jaya'],
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
            ['city' => 'Aceh Timur', 'state' => 'Aceh', 'country' => 'Indonesia', 'postal_code' => '23611', 'slug' => 'aceh-timur'],
            ['city' => 'Aceh Tenggara', 'state' => 'Aceh ', 'country' => 'Indonesia', 'postal_code' => '23611', 'slug' => 'aceh-tenggara'],
            ['city' => 'Aceh Selatan', 'state' => 'Aceh', 'country' => 'Indonesia', 'postal_code' => '23611', 'slug' => 'aceh-selatan'],
            ['city' => 'Bener Meriah', 'state' => 'Aceh', 'country' => 'Indonesia', 'postal_code' => '23611', 'slug' => 'bener-meriah'],
            ['city' => 'Aceh Tamiang', 'state' => 'Aceh', 'country' => 'Indonesia', 'postal_code' => '23611', 'slug' => 'aceh-tamiang'],
            ['city' => 'Aceh Barat Daya', 'state' => 'Aceh', 'country' => 'Indonesia', 'postal_code' => '23611', 'slug' => 'aceh-barat-daya'],
            ['city' => 'Asahan', 'state' => 'Sumatera Utara', 'country' => 'Indonesia', 'postal_code' => '23611', 'slug' => 'asahan'],
            ['city' => 'Batu Bara', 'state' => 'Sumatera Utara', 'country' => 'Indonesia', 'postal_code' => '23611', 'slug' => 'batu-bara'],
            ['city' => 'Binjai', 'state' => 'Sumatera Utara', 'country' => 'Indonesia', 'postal_code' => '23611', 'slug' => 'binjai'],
            ['city' => 'Deli Serdang', 'state' => 'Sumatera Utara', 'country' => 'Indonesia', 'postal_code' => '23611', 'slug' => 'deli-serdang'],
            ['city' => 'Gunung Sitoli', 'state' => 'Sumatera Utara', 'country' => 'Indonesia', 'postal_code' => '23611', 'slug' => 'gunung-sitoli'],
            ['city' => 'Labuhan Batu', 'state' => 'Sumatera Utara', 'country' => 'Indonesia', 'postal_code' => '23611', 'slug' => 'labuhan-batu'],
            ['city' => 'Labuhan Batu Selatan', 'state' => 'Sumatera Utara', 'country' => 'Indonesia', 'postal_code' => '23611', 'slug' => 'labuhan-batu-selatan'],
            ['city' => 'Labuhan Batu Utara', 'state' => 'Sumatera Utara', 'country' => 'Indonesia', 'postal_code' => '23611', 'slug' => 'labuhan-batu-utara'],
            ['city' => 'Medan', 'state' => 'Sumatera Utara', 'country' => 'Indonesia', 'postal_code' => '23611', 'slug' => 'medan'],
            ['city' => 'Padang Sidempuan', 'state' => 'Sumatera Utara', 'country' => 'Indonesia', 'postal_code' => '23611', 'slug' => 'padang-sidempuan'],
            ['city' => 'Pematang Siantar', 'state' => 'Sumatera Utara', 'country' => 'Indonesia', 'postal_code' => '23611', 'slug' => 'pematang-siantar'],
            ['city' => 'Sibolga', 'state' => 'Sumatera Utara', 'country' => 'Indonesia', 'postal_code' => '23611', 'slug' => 'sibolga'],
            ['city' => 'Simalungun', 'state' => 'Sumatera Utara', 'country' => 'Indonesia', 'postal_code' => '23611', 'slug' => 'simalungun'],
            ['city' => 'Tanjung Balai', 'state' => 'Sumatera Utara', 'country' => 'Indonesia', 'postal_code' => '23611', 'slug' => 'tanjung-balai'],
            ['city' => 'Tebing Tinggi', 'state' => 'Sumatera Utara', 'country' => 'Indonesia', 'postal_code' => '23611', 'slug' => 'tebing-tinggi'],
            ['city' => 'Toba Samosir', 'state' => 'Sumatera Utara', 'country' => 'Indonesia', 'postal_code' => '23611', 'slug' => 'toba-samosir'],
            ['city' => 'Langkat', 'state' => 'Sumatera Utara', 'country' => 'Indonesia', 'postal_code' => '23611', 'slug' => 'langkat'],

            // Tambahkan lebih banyak kota atau kabupaten sesuai kebutuhan
        ];

        foreach ($locations as $location) {
            Location::create($location);
        }
    }
}
