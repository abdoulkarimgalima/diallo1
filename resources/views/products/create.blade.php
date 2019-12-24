@extends("layouts.app")
@section("content")


           <form action="/products/create" method="post">
          
              @csrf

               <h5> AJOUTER VOTRE PRODUIT</h5>
               <div>
                   <input type="text" name="productname" class="form-control" placeholder="le nom du produit">
               </div>
               <div>
                   <input type="number" name="quantity" class="form-control" placeholder="quantite diponible">
               </div>
               <div>
                   <input type="text" name="price" class="form-control" placeholder="Le prix du produit">
               </div>
               <div>
                   <textarea name="Product_benefits" id="description" cols="30" rows="10" class="form-control" placeholder="avantages du produits"></textarea>
               </div>
               <br>
               <div>
                   <button class="btn btn-primary">Enregistrer</button>
               </div>
           </form>

           @endsection



           
