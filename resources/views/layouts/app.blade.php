<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <link rel="stylesheet" href="c: /home/karimdiallo/www/dloumo/resources/views/home.blade.php)
http://localhost:8000/ ommande.html">
 <link rel="stylesheet" href="contact.html">
 <link rel="stylesheet" href="arachide.html">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> LOUMO DIGITAL </title>
  <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    <link href="{{asset('css/all.css')}}" rel="stylesheet" />

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Le loumo entre mes mains</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Presentation
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="arachide.html">Arachide</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Mil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Niebe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="commande.html">commande</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Semences</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="recherche" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
      </div>
    </div>
  </nav>

  <div class="container">
      @yield("content")
  </div>
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Loumo Digital 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<script>
   tinymce.init({
       selector:'textarea.description',
       width: 900,
       height: 300
   });
</script>

<textarea class="description" name="description"></textarea>

</body>

</html>