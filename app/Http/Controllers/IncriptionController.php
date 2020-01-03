<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncriptionController extends Controller
{
    public function create(){
        return view('products.inscription',compact('products'));
     }
}
