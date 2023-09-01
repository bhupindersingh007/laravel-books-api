<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->insert([
            ['id' => 1, 'name' => 'James Clear', 'email_address' => 'jamesclear@example.com', 'website' => 'https://jamesclear.com/'],
            ['id' => 2, 'name' => 'Stephen Chbosky', 'email_address' => null, 'website' => null],
            ['id' => 3, 'name' => 'Robin Sharma', 'email_address' => 'robinsharma@example.com', 'website' => 'https://www.robinsharma.com'],
            ['id' => 4, 'name' => 'Napoleon Hill', 'email_address' => null, 'website' => null],
            ['id' => 5, 'name' => 'Robert Kiyosaki', 'email_address' => 'robert@example.com', 'website' => 'https://www.richdad.com'],
            ['id' => 6, 'name' => 'Benjamin Graham', 'email_address' => 'benjamin@example.com', 'website' => null],
            ['id' => 7, 'name' => 'J. K. Rowling', 'email_address' => null, 'website' => 'https://www.jkrowling.com'],
            ['id' => 8, 'name' => 'Chetan Bhagat', 'email_address' => 'cbhagat@example.com', 'website' => null],
            ['id' => 9, 'name' => 'Jack Canfield', 'email_address' => null, 'website' => null],
            ['id' => 10, 'name' => 'Janet Switzer', 'email_address' => null, 'website' => null],
            ['id' => 11, 'name' => 'Bob Burg', 'email_address' => null, 'website' => null],
            ['id' => 12, 'name' => 'John David Mann', 'email_address' => null, 'website' => null],
        ]);


    }
}
