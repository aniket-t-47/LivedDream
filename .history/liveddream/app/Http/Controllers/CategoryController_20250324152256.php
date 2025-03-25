<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Request $request)
    {

    }
    public function create()
    {
      
        $categories = Category::select('id', 'name')->get();
        return view('categor.create', compact('categories'));

    }
}
