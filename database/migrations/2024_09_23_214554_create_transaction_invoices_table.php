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
        Schema::create('transaction_invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaction_id'); // ID dari transaksi
            $table->unsignedBigInteger('total_amount'); // Total amount
            $table->string('status'); // e.g. fully paid, partially paid, pending, canceled
            $table->timestamps();

            $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_invoices');
    }
};
