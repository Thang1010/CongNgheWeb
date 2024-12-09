<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('issues')->insert([
            [
                'id' => 1,
                'computer_id' => 1,
                'reported_by' => 'John Doe',
                'reported_date' => Carbon::now(),
                'description' => 'Máy bị treo liên tục khi mở phần mềm.',
                'urgency' => 'High',
                'status' => 'open',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'computer_id' => 2,
                'reported_by' => 'Jane Smith',
                'reported_date' => Carbon::now(),
                'description' => 'Không khởi động được hệ điều hành.',
                'urgency' => 'Medium',
                'status' => 'in progress',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'computer_id' => 3,
                'reported_by' => '?',
                'reported_date' => Carbon::now(),
                'description' => 'Máy không nhận bàn phím.',
                'urgency' => 'Low',
                'status' => 'resolved',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
