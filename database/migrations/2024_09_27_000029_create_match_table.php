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
            $table->time('time');
            $table->string('venue', 100);
            $table->integer('total_available_ticket');
            $table->string('description', 150);
            $table->text('desc_detail');
            $table->unsignedBigInteger('mitra_id');
            $table->unsignedBigInteger('club_1_id');
            $table->unsignedBigInteger('club_2_id');
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
