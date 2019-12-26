<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    

            
public function index(){

$products = \App\Product::orderBy('created_at', 'DESC')->get();
 return view('products.index', compact('products'));

}

public function create()
{
   $categories = \App\Category::pluck('name','id');
   return view('products.create',compact('products'));
}

public function store(Request $request)
{
   $product = new \App\Product();
   $product->productname = $request->input('productname');
   $product->quantity  = $request->input('quantity');
   $product->price = $request->input('price');
   $product->Product_benefits = $request->input('Product_benefits');
   $product->save();
   return redirect('/products')->with('success', 'products saved!');
}
public function edit(Request $request, $id)
{
   $product = products::find($id);//on recupere le produit
   return view('products.edit', compact('products'));
}

public function update(Request $request, $id){
   $product = Product::find($id);
   if($product){
       $product->name = $request->input('Productname');
       $product->Quantity = $request->input('Quantity');
       $product->Price = $request->input('Price');
       $product->description = $request->input('description');
       $product->save();
   }
   return redirect('/products')->with('success', 'products saved!');
}

   
}


 



