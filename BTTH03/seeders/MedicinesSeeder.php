<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert([
            [
                'medicine_id' => 1,
                'name' => 'Paracetamol',
                'brand' => 'Panadol',
                'dosage' => '500mg',
                'form' => 'Tablet',
                'price' => 2.50,
                'stock' => 100,
            ],
            [
                'medicine_id' => 2,
                'name' => 'Amoxicillin',
                'brand' => 'Generic',
                'dosage' => '250mg',
                'form' => 'Capsule',
                'price' => 5.00,
                'stock' => 50,
            ],
            [
                'medicine_id' => 3,
                'name' => 'Ibuprofen',
                'brand' => 'Advil',
                'dosage' => '200mg',
                'form' => 'Tablet',
                'price' => 3.00,
                'stock' => 75,
            ],
        ]);
    }
}
