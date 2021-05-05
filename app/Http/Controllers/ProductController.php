<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('pages.products');
    }
    
    public function detail()
    {
        return view('pages.products_details');
    }
}
