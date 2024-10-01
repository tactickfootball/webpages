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
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->date('date');
            $table->integer('total_available_ticket');
            $table->string('description', 255);
            $table->binary('mitra_id', 36);
            $table->binary('club_1_id', 36);
            $table->binary('club_2_id', 36);
            $table->timestamps();

            // Foreign key constraints 
            $table->foreign('mitra_id')->references('id')->on('mitra')->onDelete('cascade');
            $table->foreign('club_1_id')->references('id')->on('clubs')->onDelete('cascade');
            $table->foreign('club_2_id')->references('id')->on('clubs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('matchs', function (Blueprint $table) {
            //
        });
    }
};
