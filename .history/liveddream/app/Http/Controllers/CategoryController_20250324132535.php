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
        $companies = Company::select('id', 'name')->get();
        $categories = Category::select('id', 'name')->get();
        $adhesives = Adhesive::select('id', 'name')->get();
        return view('products.create', compact('companies','categories','adhesives'));
    }
}
