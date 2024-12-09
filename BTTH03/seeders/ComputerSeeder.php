<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ComputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('computers')->insert([
            [
                'id' => 1,
                'computer_name' => 'Lab1-PC01',
                'model' => 'Dell Optiplex 7090',
                'operating_system' => 'Windows 10 Pro',
                'processor' => 'Intel Core i5-11400',
                'memory' => 8,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'computer_name' => 'Lab2-PC05',
                'model' => 'HP EliteDesk 800 G6',
                'operating_system' => 'Windows 11 Pro',
                'processor' => 'Intel Core i7-10700',
                'memory' => 16,
                'available' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'computer_name' => 'Lab3-PC03',
                'model' => 'Lenovo ThinkCentre M720',
                'operating_system' => 'Ubuntu 20.04',
                'processor' => 'Intel Core i3-9100',
                'memory' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
