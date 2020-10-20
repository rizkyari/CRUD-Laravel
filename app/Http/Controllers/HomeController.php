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
        return view('products');
    }
    
    public function edit(){
        return view('edit');
    }
}
