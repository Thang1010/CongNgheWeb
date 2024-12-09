<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'id' => 1,
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'publication_year' => 1960,
                'genre' => 'Fiction',
                'library_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => '1984',
                'author' => 'George Orwell',
                'publication_year' => 1949,
                'genre' => 'Dystopian',
                'library_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'Moby Dick',
                'author' => 'Herman Melville',
                'publication_year' => 1851,
                'genre' => 'Adventure',
                'library_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
