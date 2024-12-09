<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            ['id' => 1, 'title' => 'Movie 1', 'director' => 'Director A', 'release_date' => '2024-12-10 20:00:00', 'duration' => 120, 'cinema_id' => 1],
            ['id' => 2, 'title' => 'Movie 2', 'director' => 'Director B', 'release_date' => '2024-12-12 18:30:00', 'duration' => 110, 'cinema_id' => 2],
            ['id' => 3, 'title' => 'Movie 3', 'director' => 'Director C', 'release_date' => '2024-12-15 21:00:00', 'duration' => 95, 'cinema_id' => 1],
            // Thêm nhiều bản ghi khác nếu cần
        ]);
    }
}
