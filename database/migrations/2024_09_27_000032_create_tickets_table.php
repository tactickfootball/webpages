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
            $table->binary('uuid', 36)->primary();
            $table->binary('user_uuid', 36);
            $table->binary('match_uuid', 36);
            $table->binary('seat_uuid', 36);
            $table->binary('payment_uuid', 36);

            $table->integer('num_tickets')->check('num_tickets <= 2');
            $table->integer('amount');
            $table->json('ticket_data');
            // $table->string('payment_gateway');
            // $table->enum('payment_status', ['unpaid', 'paid'])->default('unpaid');
            // $table->decimal('total_price', 10, 2);
            // $table->text('payment_response');

            $table->timestamps();

            // Foreign key constraints
            $table->foreign('user_uuid')->references('uuid')->on('users')->onDelete('cascade');
            $table->foreign('match_uuid')->references('uuid')->on('matches')->onDelete('cascade');
            $table->foreign('seat_uuid')->references('uuid')->on('seats')->onDelete('cascade');
            $table->foreign('payment_uuid')->references('uuid')->on('payments')->onDelete('cascade');
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
