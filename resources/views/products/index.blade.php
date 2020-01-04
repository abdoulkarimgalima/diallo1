    
@extends('layouts.app')
@section('content')

<table class="table table-striped">
        <tr>
            <th></th>  
            <th>Nom Produit</th> 
            <th>image produit</th> 
            <th>Prix Produit</th>  
            <th>Quantite</th>
            ,     
            <th></th>
        </tr>
        @foreach($products as $product)
            <tr>
                <th></th>
                <th>{{$product->Productname }}</th>
                <th>{{$product->Productimage }}</th>
                <th>{{$product->Quantity}}</th>
                <th>{{$product->Price }} {{ $product->quantity->name ?? ''}}</th>
                <th><p><a href="{{route('editer_produit',['id'=>$product->id])}}">Editer</a></p></th>
           </tr>
        @endforeach   
   </table>
   
@endsection
