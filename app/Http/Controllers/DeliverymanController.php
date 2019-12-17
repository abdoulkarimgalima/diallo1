<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeliverymanController extends Controller
{
    //
    public function index()
    {
        $deliveryman = Deliveryman::orderBy('created_at')->get();
        return view('deliveryman.index', compact('deliveryman'));
     
    }

    public function edit (){

        $deliveruman = \App\Deliveryman::find($id);//on recupere le livreur
   return view('deliveryman.edit', compact('deliveryman'));
    }
}
