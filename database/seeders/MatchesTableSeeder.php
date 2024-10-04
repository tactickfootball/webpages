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
                'venue' => 'Stadion Gelora Bung Tomo',
                'total_available_ticket' => 1000,
                'description' => 'Pertandingan antara Persebaya melawan Persib',
                'desc_detail' => '<p>Get ready for an electrifying showdown between <span>[Club X]</span> and <span>[Club Y]</span> as they clash in a highly anticipated match. This encounter promises to be a thrilling spectacle for fans of both teams, with plenty of goals, skill, and strategic play on display.</p><p>Team Analysis:</p><p><span>[Club X]</span>: Renowned for their <span>[strength or unique playing style]</span>, <span>[Club X]</span> enters the match with a formidable lineup. Their key players, <span>[Player A]</span> and <span>[Player B]</span>, have been in exceptional form this season and will be crucial to their team\'s success.</p><p><span>[Club Y]</span>: Known for their <span>[strength or unique playing style]</span>, <span>[Club Y]</span> presents a strong challenge to their opponents. Their star striker, <span>[Player C]</span>, has a knack for scoring crucial goals and will be a player to watch.</p><p>Match Prediction:</p><p>This match is expected to be a closely contested affair with both teams vying for victory. While <span>[Club X]</span> has a slight edge due to their <span>[reason]</span>, <span>[Club Y]</span> should not be underestimated. Ultimately, the outcome will depend on which team can execute their game plan more effectively and capitalize on their scoring opportunities.</p><p>Key Points to Watch:</p><p>The battle between <span>[Player A]</span> and <span>[Player C]</span> will be a fascinating matchup to observe. The effectiveness of <span>[Club X]</span>\'s defensive line will be crucial in preventing <span>[Club Y]</span> from scoring. The creativity and passing ability of <span>[Club Y]</span>\'s midfield will be key to their attacking success.</p>',
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
                'venue' => 'Stadion Gelora Bung Karno',
                'total_available_ticket' => 500,
                'description' => 'Pertandingan antara Persik melawan Persebaya',
                'desc_detail' => '<p>Get ready for an electrifying showdown between <span>[Club X]</span> and <span>[Club Y]</span> as they clash in a highly anticipated match. This encounter promises to be a thrilling spectacle for fans of both teams, with plenty of goals, skill, and strategic play on display.</p><p>Team Analysis:</p><p><span>[Club X]</span>: Renowned for their <span>[strength or unique playing style]</span>, <span>[Club X]</span> enters the match with a formidable lineup. Their key players, <span>[Player A]</span> and <span>[Player B]</span>, have been in exceptional form this season and will be crucial to their team\'s success.</p><p><span>[Club Y]</span>: Known for their <span>[strength or unique playing style]</span>, <span>[Club Y]</span> presents a strong challenge to their opponents. Their star striker, <span>[Player C]</span>, has a knack for scoring crucial goals and will be a player to watch.</p><p>Match Prediction:</p><p>This match is expected to be a closely contested affair with both teams vying for victory. While <span>[Club X]</span> has a slight edge due to their <span>[reason]</span>, <span>[Club Y]</span> should not be underestimated. Ultimately, the outcome will depend on which team can execute their game plan more effectively and capitalize on their scoring opportunities.</p><p>Key Points to Watch:</p><p>The battle between <span>[Player A]</span> and <span>[Player C]</span> will be a fascinating matchup to observe. The effectiveness of <span>[Club X]</span>\'s defensive line will be crucial in preventing <span>[Club Y]</span> from scoring. The creativity and passing ability of <span>[Club Y]</span>\'s midfield will be key to their attacking success.</p>',
                'mitra_id' => 2,
                'club_1_id' => 3,
                'club_2_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
