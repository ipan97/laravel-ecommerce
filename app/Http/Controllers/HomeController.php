<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::with('images')->paginate(10);

        $data = [];

        $data['products'] = $products;

        return view('home', compact('data'));
    }
}
