<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sample;

class SampleController extends Controller
{
    //


    public function create()
    {
        // $companies = Company::select('id', 'name')->get();
        $sample = Sample::select('id', 'name')->get();
      
        return view('products.create', compact('companies','sample'));
    }
}
