<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'admin@luxima.id',
        //     'password' => Hash::make('12345678'),
        // ]);
        // User::factory()->create([
        //     'name' => 'Siddiq Achmad',
        //     'email' => 'siddiq@luxima.id',
        //     'password' => Hash::make('12345678'),
        // ]);
        $this->call([
            UserSeeder::class,
            BlogSeeder::class,
            CategorySeeder::class,
            LocationSeeder::class,
            VendorSeeder::class,
            ServiceSeeder::class,
            BookingSeeder::class,
            ReviewSeeder::class,
            PersonalAccessTokenSeeder::class,
        ]);
    }
}
