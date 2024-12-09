<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaptopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laptops')->insert([
            [
                'id' => 1,
                'brand' => 'Dell',
                'model' => 'Inspiron 15',
                'rental_status' => true, // Đang cho thuê
                'renter_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'brand' => 'HP',
                'model' => 'Pavilion 14',
                'rental_status' => false, // Chưa cho thuê
                'renter_id' => null,     // Không có người thuê
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'brand' => 'Apple',
                'model' => 'MacBook Pro',
                'rental_status' => true, // Đang cho thuê
                'renter_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
    }
}
