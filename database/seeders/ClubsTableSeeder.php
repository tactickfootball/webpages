<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clubs')->insert([
            [
                'name' => 'PERSEBAYA',
                'logo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuTnA3evDaTiLY_kRciXhGFmLPNCLWw0laTQ&s',
                'description' => 'Logo Persebaya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PERSIB',
                'logo' => 'https://upload.wikimedia.org/wikipedia/id/thumb/1/12/Logo_Persib.png/1200px-Logo_Persib.png',
                'description' => 'Logo Persib',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PERSIK',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Logo_Persik_Kediri.jpg/800px-Logo_Persik_Kediri.jpg',
                'description' => 'Logo Persik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
