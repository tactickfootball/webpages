<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('matches')->insert([
            [
                'name' => 'PERSEBAYA VS PERSIB',
                'date' => '2024-09-27',
                'time' => '19:00:00',
                'total_available_ticket' => 1000,
                'description' => 'Pertandingan antara Persebaya melawan Persib',
                'mitra_id' => 1,
                'club_1_id' => 1,
                'club_2_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PERSIK VS PERSEBAYA',
                'date' => '2024-10-30',
                'time' => '10:00:00',
                'total_available_ticket' => 500,
                'description' => 'Pertandingan antara Persik melawan Persebaya',
                'mitra_id' => 2,
                'club_1_id' => 3,
                'club_2_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
