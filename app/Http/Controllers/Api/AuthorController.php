<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $request->filled('search')
         ? Author::where('name', 'like', "%$request->search%")->paginate()
         : Author::paginate();
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        return $author->load(['books.category']);
    }

}
