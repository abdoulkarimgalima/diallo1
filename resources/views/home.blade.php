
@extends("layouts.app")
@section("content")
 <div class="container">
   <h1> votre loumo a domicile </h1>
 </div>

  <!-- Page Content --><header>

</header>
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Loumo Digital </h1>
        <div class="list-group">
    
          <a href="#" class="list-group-item">CLIENT ICI</a>
          <a href="#" class="list-group-item">Achetez Produit</a>

          <ul class="nav nav-tabs">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">INSCRIPTION</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Inscription client</a>
                  <a class="dropdown-item" href="#">connexion client</a>
                  <a class="dropdown-item" href="#">inscription commercant</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Connexion commercant</a>
                </div>
            </li>
          </ul>
          <a href="#" class="list-group-item">COMMERCANT ICI</a>
          <a href="{{url('products/create')}}" class="list-group-item">Ajouter Produit</a>
        
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="images/photo.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/cheval.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/img05.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="/media/karimdiallo/779380417/boostrap ori/bobo3.jpg" alt="" width="100" height="200"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Arachide</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">l'arachide reste la principale culture du senegal et ausi reste la base de plusieurs plats locaux sans pour autant oublier la paille qui reste l'aliment des rudiments</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
          

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="/media/karimdiallo/779380417/boostrap ori/bobo1.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">NIEBE</a>
                </h4>
                <h5> 500 fcfa/kg</h5>
                <p class="card-text">Le niebe est un produit riche en protides et tres consommes au senegal.Pour assurer une productivite en qualite et en quantite nous avons choisi la varite yacine.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="/home/karimdiallo/www/dloumo/public/images/img05.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Three</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="/media/karimdiallo/779380417/boostrap ori/img04.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Four</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="/media/karimdiallo/779380417/boostrap ori/img04.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Five</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="/media/karimdiallo/779380417/boostrap ori/img04.jpg" alt="" width="100" height="100"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Six</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  @endsection