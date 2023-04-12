<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PubblicController extends Controller
{
    public function homepage() {
        $products = Product::all(); //? select * from products;
        // dd($products->isNotEmpty());
        return view('welcome', ['products' => $products]);
    }
}
