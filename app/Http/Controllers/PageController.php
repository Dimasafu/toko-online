<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function cart()
    {
        return view('cart');
    }
    public function products()
    {
        return view('products');
    }
    public function checkout()
    {
        return view('checkout');
    }
}
