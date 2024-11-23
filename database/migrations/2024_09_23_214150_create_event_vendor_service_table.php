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
        Schema::create('event_vendor_service', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_vendor_id'); // ID dari event_vendor
            $table->unsignedBigInteger('service_id'); // ID dari layanan
            $table->unsignedBigInteger('amount');
            $table->timestamps();

            $table->foreign('event_vendor_id')->references('id')->on('event_vendor')->onDelete('cascade');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_vendor_service');
    }
};
