<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// use Illuminate\Support\Facades\DB;
// use Ramsey\Uuid\Uuid;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->binary('uuid', 36)->primary();
            $table->enum('role', ['admin', 'customer'])->default('customer');
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Generate UUIDs for existing records if needed
        // DB::table('roles')->get()->each(function ($role) {
        //     DB::table('roles')->where('id', $role->id)->update(['uuid' => Uuid::uuid4()->getBytes()]);
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('roles', function (Blueprint $table) {
            //
        });
    }
};
