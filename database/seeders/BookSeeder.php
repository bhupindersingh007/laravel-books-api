<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([

            ['id' => 1, 'title' => 'Atomic Habits', 'isbn' => '978-0-9488-1116-6', 'category_id' => 2, 'published_at' => 2015, 'publisher_id' => 1],

            ['id' => 2, 'title' => 'Rich Dad Poor Dad', 'isbn' => '978-0-9488-1116-8', 'category_id' => 1, 'published_at' => 1997, 'publisher_id' => 2],
            ['id' => 3, 'title' => 'Cash Flow Quadrant', 'isbn' => '978-0-9488-1116-7', 'category_id' => 1, 'published_at' => 1999, 'publisher_id' => 2],

            ['id' => 4, 'title' => '5 AM Club', 'isbn' => '978-0-9488-1116-4', 'category_id' => 2, 'published_at' => 2018, 'publisher_id' => 3],
            ['id' => 5, 'title' => 'The Monk Who Sold His Ferrari', 'isbn' => '978-0-9488-1116-3', 'category_id' => 2, 'published_at' => 2018, 'publisher_id' => 3],
            ['id' => 6, 'title' => 'Who Will Cry When You Die', 'isbn' => '978-0-9488-1116-2', 'category_id' => 2, 'published_at' => 2019, 'publisher_id' => 3],

            ['id' => 7, 'title' => 'The Perks of Being Wallflower', 'isbn' => '978-0-9488-1116-1', 'category_id' => 4, 'published_at' => 1999, 'publisher_id' => 6],

            ['id' => 8, 'title' => 'Harry Potter - The Half Bold Prince', 'isbn' => '978-0-9488-1116-9', 'category_id' => 4, 'published_at' => 1997, 'publisher_id' => 2],

            ['id' => 9, 'title' => '3 Mistakes of My Life', 'isbn' => '978-0-9488-1111-1', 'category_id' => 5, 'published_at' => 2014,  'publisher_id' => 4],
            ['id' => 10, 'title' => 'Half Girlfriend', 'isbn' => '978-0-9488-1116-0', 'category_id' => 6, 'published_at' => 2015, 'publisher_id' => 4],

            ['id' => 11, 'title' => 'The Success Principles: How to Get from Where You Are to Where You Want to Be', 'isbn' => '978-0-9488-1237-1', 'category_id' => 2, 'published_at' => 2004,  'publisher_id' => 7],
            ['id' => 12, 'title' => 'The Go-Giver: A Little Story About a Powerful Business Idea', 'isbn' => '978-1-59184-200-2', 'category_id' => 2, 'published_at' => 2007,  'publisher_id' => 8],

        ]);



        DB::table('author_book')->insert([
            ['id' => 1, 'book_id' => 1, 'author_id' => 1],

            ['id' => 2, 'book_id' => 2, 'author_id' => 5],
            ['id' => 3, 'book_id' => 3, 'author_id' => 5],

            ['id' => 4, 'book_id' => 4, 'author_id' => 3],
            ['id' => 5, 'book_id' => 5, 'author_id' => 3],
            ['id' => 6, 'book_id' => 6, 'author_id' => 3],

            ['id' => 7, 'book_id' => 7, 'author_id' => 2],

            ['id' => 8, 'book_id' => 8, 'author_id' => 7],

            ['id' => 9, 'book_id' => 9, 'author_id' => 8],
            ['id' => 10, 'book_id' => 10, 'author_id' => 8],

            ['id' => 11, 'book_id' => 11, 'author_id' => 9],
            ['id' => 12, 'book_id' => 11, 'author_id' => 10],

            
            ['id' => 13, 'book_id' => 12, 'author_id' => 11],
            ['id' => 14, 'book_id' => 12, 'author_id' => 12],

            

        ]);





    }
}
