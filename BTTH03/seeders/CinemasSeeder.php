<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CinemasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cinemas')->insert([
            ['id' => 1, 'name' => 'Cinema 1', 'location' => 'Hanoi', 'total_seats' => 200],
            ['id' => 2, 'name' => 'Cinema 2', 'location' => 'Ho Chi Minh', 'total_seats' => 150],
            // Thêm nhiều bản ghi khác nếu cần
        ]);
    }
}
