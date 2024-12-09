<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrariesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libraries')->insert([
            [
                'id' => 1,
                'name' => 'Central Library',
                'address' => '123 Main Street, Cityville',
                'contact_number' => 123456789,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Westside Branch',
                'address' => '456 Elm Street, Townsville',
                'contact_number' => 987654321,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
