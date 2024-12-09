<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('renters')->insert([
            [
                'id' => 1,
                'name' => 'Nguyễn Văn A',
                'phone_number' => 123456789,
                'email' => 'nguyenvana@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Trần Thị B',
                'phone_number' => 987654321,
                'email' => 'tranthib@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
