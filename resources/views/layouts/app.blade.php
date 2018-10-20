<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />  

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />

  <!-- Main Styles CSS -->
  <link rel="stylesheet" href="../css/eleden.css" />

  <!-- Title to this page -->
  <title>El Edén - @yield('title')</title>

  <!-- Facebook Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '341460433066198');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=341460433066198&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->
</head>
<body>
  <!-- Header -->
  <header class="main-header sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
          <a class="navbar-brand" href="#">
            <img class="logo" src="../images/eleden-logo.svg" alt="El Edén logo" width="160px" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#nosotros">Nosotros <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Departamentos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#departamentos">Gardenias</a>
                <a class="dropdown-item" href="#">Margaritas</a>
                <a class="dropdown-item" href="#">Orquídeas</a>
                <a class="dropdown-item" href="#">Lirios</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#ubicacion">Ubicación</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contacto">Contáctanos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-eleden" href="#" data-toggle="modal" data-target="#modalDescuento">Quiero un descuento</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- /Header -->
  @section('sidebar')
      This is the master sidebar.
  @show

  <div class="container">
      @yield('content')
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- Tidio Chat -->
  <script src="//code.tidio.co/whnzxnfwznnta283thxydpefkxsjnjch.js"></script>
  <!-- Map Google -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZIfF4Za0ymS-t5l32ACobtOk2MFiLNaE&callback=initMap" async defer></script>
  <!-- Apps El Eden -->
  <script src="../js/eleden.js"></script>
  <script>
    fbq('track', 'Purchase', {
      value: 100,
      currency: 'MXN',
    });
  </script>
  <script>
    fbq('track', 'Lead', {
      value: 500,
      currency: 'MXN',
    });
  </script>
</body>
</html>