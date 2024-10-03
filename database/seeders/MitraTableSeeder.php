<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MitraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mitra')->insert([
            [
                'name' => 'Persebaya Surabaya',
                'description' => 'Penyelenggara Liga 1',
                'rating' => 5.0,
                'registration_date' => now(),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PT Liga Indonesia Baru',
                'description' => 'Penyelenggara Liga 2',
                'rating' => 5.0,
                'registration_date' => now(),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
