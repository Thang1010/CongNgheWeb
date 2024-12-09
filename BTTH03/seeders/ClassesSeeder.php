<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            [
                'id' => 1,
                'grade_level' => 'Pre-K',
                'room_number' => 'A101',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'grade_level' => 'Kindergarten',
                'room_number' => 'B202',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
