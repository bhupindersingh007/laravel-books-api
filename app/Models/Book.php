<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public $timestamps = false;
    

    public function category(){

        return $this->belongsTo(Category::class, 'category_id');

    }

    public function publisher(){

        return $this->belongsTo(Publisher::class, 'publisher_id');

    }

    public function authors(){

        return $this->belongsToMany(Author::class, 'author_book', 'book_id', 'author_id');

    }
}
