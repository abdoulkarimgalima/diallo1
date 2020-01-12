@extends("layouts.app")
@section("contenu")

<form method="post" action="">
 
   <fieldset>
       <legend>inscription</legend> <!-- Titre du fieldset --> 

       <label for="nom">Quel est votre nom ?</label>
       <input type="text" name="nom" id="nom" />

       <label for="prenom">Quel est votre prénom ?</label>
       <input type="text" name="prenom" id="prenom" />
       
       <label for="Numero">Quel est votre numero de telephone ?</label>
       <input type="tel" name="number" id="number" />

       <label for="number">Quel est votre numero cni ?</label>
       <input type="number" name="prenom" id="prenom" />
 
       <label for="email">Quel est votre e-mail ?</label>
       <input type="email" name="email" id="email" />

   </fieldset>
</form>



@endsection