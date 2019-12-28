<table class="table table-striped">
       <tr>
           <th>#</th>      
        <th>Nom Produit</th>   
        <th>quantite du produit</th>  
        <th>Prix du produit</th>  
            <th>description</th>    
            
                   <th></th>
       </tr>
       @foreach($products as $product)
           <tr>
               <th>#</th>
               <th>{{$product->Productname}}</th>
               <th>{{$product->Quantite}}</th>
               <th>{{$product->Price}}</th>
               <th>{{$product->description}} {{ $product->category->name ?? '' }}</th>
               <th></th>
           </tr>
       @endforeach
   </table>
