<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::limit(3)->inRandomOrder()->get();
        $products = Product::limit(3)->inRandomOrder()->get();
        
        return view('home', compact('categories', 'products'));
    }
}
