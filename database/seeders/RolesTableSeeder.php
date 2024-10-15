<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'role' => 'admin',
                'description' => 'Admin role',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role' => 'customer',
                'description' => 'User role',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}