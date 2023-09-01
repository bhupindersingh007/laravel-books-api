<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('publishers')->insert([
            
            ['id' => 1, 'name' => 'Penguin Random House', 'email_address' => 'penguinrandomhouse@example.com', 'contact_number' => null, 'address' => null, 'website' => 'https://www.penguinrandomhouse.com'],
            ['id' => 2, 'name' => 'Warner Books', 'email_address' => 'warnerbooks@example.com', 'contact_number' => '1234567890', 'address' => '10 Cadillac Dr Ste 220, Brentwood, Tennessee', 'website' => null],
            ['id' => 3, 'name' => 'HarperCollins', 'email_address' => 'harpercollins@example.com', 'contact_number' => null, 'address' => null, 'website' => null],
            ['id' => 4, 'name' => 'Rupa Publications Pvt. Ltd', 'email_address' => 'rupapublications@example.com', 'contact_number' => '1234512890', 'address' => '161, B-4, Ground Floor, Gulmohar House, Yusuf Sarai Community Centre, New Delhi', 'website' => null],
            ['id' => 5, 'name' => 'Blooms Bury', 'email_addrees' => 'bloomsbury@example.com', 'contact_number' => '1234568111', 'address' => null, 'website' => 'https://www.bloomsbury.com/ca/'],
            ['id' => 6, 'name' => 'Simon & Schuster', 'email_address' => 'simonandschuster@example.com', 'contact_number' => '1234188090', 'address' => null, 'website' => null],
            ['id' => 7, 'name' => 'HarperCollins Publishers Ltd', 'email_address' => 'hcorder@harpercollins.com', 'contact_number' => null, 'address' => null, 'website' => 'https://www.harpercollins.ca' ],
            ['id' => 8, 'name' => 'Portfolio Hardcover', 'email_address' => 'info@portfoliohardcover.com', 'contact_number' => null, 'address' => null, 'website' => null ],
       
        ]);
    }
}
