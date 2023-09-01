<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Publisher;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        return $request->filled('search')
         ? Publisher::where('name', 'like', "%$request->search%")->paginate()
         : Publisher::paginate();
    }

    /**
     * Display the specified resource.
     */
    public function show(Publisher $publisher)
    {
        return $publisher->load(['books.category']);
    }
}
