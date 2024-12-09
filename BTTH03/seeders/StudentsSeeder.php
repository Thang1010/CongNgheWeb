<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            [
                'id' => 1,
                'first_name' => 'Emily',
                'last_name' => 'Johnson',
                'date_of_birth' => '2018-03-15',
                'parent_phone' => '1234567890',
                'class_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'first_name' => 'Liam',
                'last_name' => 'Smith',
                'date_of_birth' => '2017-07-20',
                'parent_phone' => '0987654321',
                'class_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'first_name' => 'Sophia',
                'last_name' => 'Brown',
                'date_of_birth' => '2018-11-02',
                'parent_phone' => '1122334455',
                'class_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
