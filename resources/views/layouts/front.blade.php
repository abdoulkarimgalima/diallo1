<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <link rel="stylesheet" href="commande.html">
 <link rel="stylesheet" href="contact.html">
 <link rel="stylesheet" href="arachide.html">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> LOUMO DIGITAL </title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('css/app.css')}}" rel="stylesheet">
  <link href="{{asset('css/all.css')}}" rel="stylesheet">
  

  <!-- Custom styles for this template 
  <link href="css/shop-homepage.css" rel="stylesheet">-->

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Le loumo entre mes mains</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link active" href="#">ACCEUIL</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('products')}}">NOS PRODUITS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/">CONTACT</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
  </div>
</nav>
    </div>
  </nav>
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <h1 class="my-4">Loumo Digital </h1>
        <div class="list-group">
          <a href="#" class="list-group-item">COMMERCANT</a>
          <a href="products.create" class="list-group-item">AJOUTEZ PRODUIT</a>
          <H2>DLOUMO</H2>
          <a href="#" class="list-group-item">CLIENTS</a>
          <a href="#" class="list-group-item">ACHETEZ PRODUIT</a>
        </div>
      </div>
        <!-- /.col-lg-3 -->
      <div class="col-lg-9">
        @yield('contenu')
      </div>
    </div>
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; KARIM Loumo Digital 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('js/app.js')}}"></script>

</body>

</html>
