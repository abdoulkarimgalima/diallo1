<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
            
public function index(){

$products = \App\Product::orderBy('created_at', 'DESC')->get();
 return view('Produit', compact('products'));

}

public function create()
{
   return view('produit.create',compact('products'));
}

public function store(Request $request)
{
   $produit = new \App\Product();
   $produit->productname = $request->input('productname');
   $produit->quantity  = $request->input('quantity');
   $produit->price = $request->input('price');
   $produit->Product_benefits = $request->input('Product_benefits');
   $produit->save();
   return redirect('/product');
}
public function edit()
{
   return view('produit.create',compact('categories'));
}


 

public function update(Request $request, $id)
{
   $product = \App\Product::find($id);
   if($product){
       $product->update([
        'productname' = $request->input('productname'),
        'quantity' = $request->input('quantity'),
       'price' = $request->input('price'),
       'description' = $request->input('Product_benefits'),
       ]);
   }
   return redirect('/products');
}



