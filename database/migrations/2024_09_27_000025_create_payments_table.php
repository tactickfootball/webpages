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
            $table->string('reference');
            $table->string('reff_id');
            $table->enum('status', ['unpaid', 'paid'])->default('unpaid');
            $table->string('customer_email');
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('payment_channel'); // qris or other
            $table->integer('total_harga');
            $table->integer('total_dibayar');
            $table->integer('total_diterima');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('payments', function (Blueprint $table) {
            //
        });
    }
};
