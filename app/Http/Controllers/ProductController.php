<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        return view('product/create');
    }

    public function store(Request $request){
   
        $name = $request->input('name');
        $brand = $request->input('brand');
        $description = $request->input('description');
        $price = $request->input('price');
      
        Product::create(
            [
                'name' => $name,
                'description' => $description,
                'brand' => $brand,
                'price' => $price
            ]
        );

        return redirect()->route('homepage');
       
    }

    public function getProductsByBrand($brand){
        $products = Product::where('brand' , $brand)->get();
        return view('product/brand' , compact('products'));
    }

}
