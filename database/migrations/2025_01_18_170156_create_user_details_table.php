<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relasi ke tabel users
            $table->string('phone', 15)->nullable(); // Nomor telepon
            $table->text('address')->nullable(); // Alamat
            $table->date('birth_date')->nullable(); // Tanggal lahir
            $table->enum('gender', ['male', 'female', 'other'])->nullable(); // Jenis kelamin
            $table->string('nationality', 100)->nullable(); // Kewarganegaraan
            $table->string('languages')->nullable(); // Bahasa yang dikuasai
            $table->string('occupation', 100)->nullable(); // Pekerjaan
            $table->text('bio')->nullable(); // Biografi singkat
            $table->string('bg_image')->nullable(); // Latar profil
            $table->json('social_media')->nullable();
            $table->string('status')->nullable(); // Status pengguna (Active/Inactive)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
