<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItCentersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('it_centers')->insert([
            ['id' => 1, 'name' => 'Center 1', 'location' => 'Hanoi', 'contact_email' => 'center1@example.com'],
            ['id' => 2, 'name' => 'Center 2', 'location' => 'Ho Chi Minh', 'contact_email' => 'center2@example.com'],
            // Thêm nhiều bản ghi khác nếu cần
        ]);
    }
}
