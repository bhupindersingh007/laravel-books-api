<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $request->filled('search')
        ? Category::where('name', 'like', "%$request->search%")->paginate()
        : Category::paginate();
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return $category;
    }
}
