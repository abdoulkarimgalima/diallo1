<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
<<<<<<< HEAD

{
                
=======
{
            
>>>>>>> 7da3aed49320a707c0c6ccd36dfef5d908be6937
public function index(){

$products = \App\Product::orderBy('created_at', 'DESC')->get();
 return view('products.index', compact('products'));

}

public function create()
{
   return view('produit.create',compact('products'));
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
   $products = Product::find($id);//on recupere le produit
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






