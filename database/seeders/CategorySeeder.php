<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([

            ['id' => 1, 'name' => 'Personal Finance'],
            ['id' => 2, 'name' => 'Self Help'],
            ['id' => 4, 'name' => 'Fiction'],
            ['id' => 5, 'name' => 'Fantasy'],
            ['id' => 6, 'name' => 'Romance'],
            ['id' => 7, 'name' => 'Horror']
        ]);
    }
}
