<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert([
            [
                'sale_id' => 1,
                'medicine_id' => 1,
                'quantity' => 2,
                'sale_date' => now(),
                'custimer_phone' => '0123456789',
            ],
            [
                'sale_id' => 2,
                'medicine_id' => 2,
                'quantity' => 1,
                'sale_date' => now(),
                'custimer_phone' => '0987654321',
            ],
            [
                'sale_id' => 3,
                'medicine_id' => 3,
                'quantity' => 5,
                'sale_date' => now(),
                'custimer_phone' => '0123456789',
            ],
        ]);
    }
}
