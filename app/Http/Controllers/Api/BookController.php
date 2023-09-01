<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Resources\BookResource;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $books = $request->filled('search')
        ? Book::where('title', 'LIKE', "%$request->search%")->with('category', 'publisher', 'authors')->paginate()
        : Book::with('category', 'publisher', 'authors')->paginate();

        return BookResource::collection($books);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
      
        return new BookResource($book);

    }

}
