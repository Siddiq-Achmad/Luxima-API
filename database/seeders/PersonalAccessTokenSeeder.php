<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Laravel\Passport\PersonalAccessTokenResult;

class PersonalAccessTokenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = User::all();

        foreach ($users as $user) {
            // Buat personal access token untuk setiap pengguna
            $token = $user->createToken('Personal Access Token')->accessToken;

            // Menampilkan token
            echo "User: {$user->name}, Token: {$token}\n";
        }
    }
}
