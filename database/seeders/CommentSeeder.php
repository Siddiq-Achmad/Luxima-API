<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Blog;
use App\Models\User;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        // Ambil semua blog dan user
        $blogs = Blog::all();
        $users = User::all();

        // Jika blog atau user tidak tersedia, hentikan proses
        if ($blogs->isEmpty() || $users->isEmpty()) {
            $this->command->error('Tidak ada blog atau user yang ditemukan. Pastikan tabel blogs dan users sudah diisi.');
            return;
        }

        // Generate komentar
        foreach ($blogs as $blog) {
            for ($i = 0; $i < rand(3, 10); $i++) { // Setiap blog memiliki antara 3-10 komentar
                Comment::create([
                    'content' => $faker->sentence(rand(10, 20)),
                    'blog_id' => $blog->id,
                    'user_id' => $users->random()->id, // Random user
                ]);
            }
        }

        $this->command->info('CommentSeeder berhasil dijalankan!');
    }
}
