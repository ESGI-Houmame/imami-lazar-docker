<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class Product extends Controller
{
    public function index()
    {
        $products = \App\Models\Product::all();
        return view("products.list", compact("products"));
    }
}
