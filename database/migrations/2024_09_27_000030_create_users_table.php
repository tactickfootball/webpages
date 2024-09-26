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
        Schema::create('users', function (Blueprint $table) {
            $table->binary('uuid', 36)->primary();
            $table->binary('role_uuid', 36); // Default role is customer
            $table->date('registration_date');
            $table->integer('nik');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('number');
            $table->date('birth_date');
            $table->string('gender');

            $table->timestamps();

            // Foreign key constraint
            $table->foreign('role_uuid')->references('uuid')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
