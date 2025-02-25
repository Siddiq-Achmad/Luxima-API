<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Testimonial;
use App\Models\User;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $faker = Faker::create();

        // Ambil semua user yang memiliki detail
        $users = User::has('details')->get();

        if ($users->isEmpty()) {
            $this->command->warn("Tidak ada user dengan details. Seeder tidak berjalan.");
            return;
        }

        foreach ($users as $user) {
            Testimonial::create([
                'user_id' => $user->id,
                'quote' => $faker->sentence(10),
                'is_approved' => $faker->boolean(80), // 80% kemungkinan disetujui
            ]);
        }

        $this->command->info("Seeder Testimonial berhasil dijalankan!");
    }
}
