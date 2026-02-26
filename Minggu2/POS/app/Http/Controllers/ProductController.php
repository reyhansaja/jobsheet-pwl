<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function foodBeverage()
    {
        return view('products.category', ['category' => 'Food & Beverage']);
    }

    public function beautyHealth()
    {
        return view('products.category', ['category' => 'Beauty & Health']);
    }

    public function homeCare()
    {
        return view('products.category', ['category' => 'Home Care']);
    }

    public function babyKid()
    {
        return view('products.category', ['category' => 'Baby & Kid']);
    }
}
