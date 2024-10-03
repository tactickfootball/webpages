<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('seats')->insert([
            [
                'name' => 'Tribun Utara',
                'price' => 25000,
            ],
            [
                'name' => 'Tribun Selatan',
                'price' => 25000,
            ],
            [
                'name' => 'Tribun Barat',
                'price' => 25000,
            ],
            [
                'name' => 'Tribun Timur',
                'price' => 25000,
            ],
        ]);
    }
}
