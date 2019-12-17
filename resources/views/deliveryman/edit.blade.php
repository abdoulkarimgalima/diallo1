@extends('layouts.app')
@section('content')
<form action="{{route('update_edit',['id'=>$edit->id])}}" method="post">
   @csrf
   @method('patch')
   <form action="/edit" method="post">


               <h5>INSERRER VOTRE PRODUIT</h5>
               <div>
                   <input type="text" name="productname" class="form-control" placeholder="nom du produit">
               </div>
               <div>
                   <input type="number" name="quantity" class="form-control" placeholder="quantite diponible">
               </div>
               <div>
                   <input type="text" name="price" class="form-control" placeholder="prix du produit">
               </div>
               <div>
                   <textarea name="Product_benefits" id="description" cols="30" rows="10" class="form-control" placeholder="avantages du produit"></textarea>
               </div>
               <Hr>
               <div>
                   <button class="btn btn-primary">Enregistrement Produit</button>
               </div>
           </form>
@endsection