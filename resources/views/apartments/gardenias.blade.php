@extends('layouts.app')

@section('title', 'Gardenias un departamento familiar para ti')
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.1&appId=252843105575092&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  @section('content')
    <section class="gallery">
      <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel" data-slide-to="0" class="active"></li>
          <li data-target="#carousel" data-slide-to="1"></li>
          <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="../images/assets/gardenias-01.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../images/assets/gardenias-02.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../images/assets/gardenias-03.jpg" alt="Third slide">
          </div>
        </div>
        <div class="overlay">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 offset-md-6 text-center text-md-right">
                        <h1>Gardenias</h1>
                        <p class="d-none d-md-block">
                          Un departamento que esta listo para invitar a tus amigos
                          y hacer esas reuniones <strong>más divertidas!</strong>
                          porque te queremos, sabemos lo importante que es contar
                          con lugar acogedor.
                        </p>
                        {{-- <a href="#" class="btn btn-outline-light">Visitar</a> --}}
                        <button type="button" class="btn btn-eleden" data-toggle="modal" data-target="#modalDescuento">Quiero un descuento</button>
                        <!-- Your share button code -->
                        <div class="fb-share-button align-middle" 
                          data-href="https://eledenparavivir.mx/departamentos/gardenias" 
                          data-layout="button_count">
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
  @endsection