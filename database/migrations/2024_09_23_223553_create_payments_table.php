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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaction_invoice_id'); // ID dari transaction invoice
            $table->unsignedBigInteger('payment_method_id'); // Menambahkan kolom payment_method_id
            $table->unsignedBigInteger('amount');
            $table->string('description'); // description payment
            $table->timestamps();

            $table->foreign('transaction_invoice_id')->references('id')->on('transaction_invoices')->onDelete('cascade');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods')->onDelete('cascade'); // Menambahkan foreign key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
