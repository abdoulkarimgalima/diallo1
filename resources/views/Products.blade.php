
<table class="table table-striped">
       <tr>
           <th>#</th>  
        <th>Nom Produit</th>  
    <th>Prix Produit</th>     
          <th></th>
       </tr>
       @foreach($products as $product)
   <tr>
       <th>#</th>
       <th>{{$product->productname}}</th>
       <th>{{$product->quantity}}</th>
       <th>{{$product->price}}</th>
       <th>{{$product->Product_benefits}}</th>
       <th>{{$product->price}} {{ $product->category->name ?? '' }}</th>
       <th>

    <p><a href="{{route('Product_editer',['id'=>$product->id])}}" >Editer</a>

</p>
       </th>
   </tr>
@endforeach
   </table>
   

