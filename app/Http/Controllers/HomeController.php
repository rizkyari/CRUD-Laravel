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
        // findOrFail for one data only
        // where id for many
        $product = Product::findOrFail($id);
        return view('edit', compact('product'));
    }

    public function update(Request $request, $id){
        Product::where('id',$id)->update([
            'product_name' => $request -> name,
            'price' => $request -> price,
            'stock' => $request -> stock,
        ]);

        return redirect("/view");
    }

    public function delete($id){
        Product::destroy($id);
        return back();
    }
}
