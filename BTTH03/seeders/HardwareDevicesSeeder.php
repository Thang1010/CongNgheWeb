<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HardwareDevicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hardware_devices')->insert([
            ['id' => 1, 'device_name' => 'Dell Mouse', 'type' => 'Mouse', 'status' => 1, 'center_id' => 1],
            ['id' => 2, 'device_name' => 'HP Keyboard', 'type' => 'Keyboard', 'status' => 0, 'center_id' => 2],
            ['id' => 3, 'device_name' => 'Logitech Headset', 'type' => 'Headset', 'status' => 1, 'center_id' => 1],
            // Thêm nhiều bản ghi khác nếu cần
        ]);
    }
}
