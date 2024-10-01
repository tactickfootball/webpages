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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->binary('user_id', 36);
            $table->binary('match_id', 36);
            $table->binary('seat_id', 36);
            $table->binary('payment_id', 36);

            $table->integer('num_tickets')->check('num_tickets <= 2');
            $table->integer('amount');
            $table->json('ticket_data');
            // $table->string('payment_gateway');
            // $table->enum('payment_status', ['unpaid', 'paid'])->default('unpaid');
            // $table->decimal('total_price', 10, 2);
            // $table->text('payment_response');

            $table->timestamps();

            // Foreign key constraints
            $table->foreign('user_uuid')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('match_uuid')->references('id')->on('matches')->onDelete('cascade');
            $table->foreign('seat_uuid')->references('id')->on('seats')->onDelete('cascade');
            $table->foreign('payment_uuid')->references('id')->on('payments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
