@extends('layouts.front')

@section('contenu')

<div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
      <img class= "images d-block img-fluid" src = "{{asset('images/variete2.jpg')}}" height ="900" width="350" alt='1' />
      </div>
      <div class="carousel-item">
      <img class= "images d-block img-fluid" src = "{{asset('images/img05.jpg')}}" height ="900" width="350" alt='2' />
      </div>
      <div class="carousel-item">
      <img class= "images d-block img-fluid" src = "{{asset('images/variete3.jpg')}}" height ="900" width="350" alt='3' />   </div>
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
        <a href="#"><img class="card-img-top" src = "{{asset('images/variete3.jpg')}}" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">Arachide</a>
          </h4>
          <h5>$24.99</h5>
          <p class="card-text"> En dehors de l'huile,l'arachide reste la principale culture du senegal et ausi reste la base de plusieurs plats locaux sans pour autant oublier la paille qui reste l'aliment des rudiments</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="{{asset('images/variete3.jpg')}}" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">NIEBE</a>
          </h4>
          <h5> 500 fcfa/kg</h5>
          <p class="card-text">Le niebe est un produit riche en protides et tres consommeau senegal.Pour assurer une productivite en qualite et en quantite nous avons choisi la varite yacine.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="{{asset('images/variete4.jpg')}}" alt=""></a>
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
        <a href="#"><img class="card-img-top" src="{{asset('images/variete3.jpg')}}" alt=""></a>
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
        <a href="#"><img class="card-img-top" src="{{asset('images/notre.jpg')}}"  alt=""></a>
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
        <a href="#"><img class="card-img-top" src="{{asset('images/photo.jpg')}}" alt="" width="100" height="100"></a>
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
@endsection