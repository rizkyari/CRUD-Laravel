<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    public function home(){
        return view('welcome');
    }

    Public function store(Request $request){
        Product::create([
            'product_name' => $request -> name,
            'price' => $request -> price,
            'stock' => $request -> stock,
        ]);

        return back();
    }

    public function view(){
        $products = Product::all();
        return view('products',compact('products'));
    }
    
    public function edit($id){
        $product = Product::where('id',$id)->first();
        return view('edit', compact('product'));
    }
}
