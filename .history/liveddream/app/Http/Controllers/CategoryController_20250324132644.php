<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {

    }
    public function create()
    {
      
        $categories = Category::select('id', 'name')->get();
        return view('category.create', compact('categories'));
    }
}
