<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

<<<<<<< HEAD
            .full-height {
                height: 100vh;
            }
=======
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
    <body data-spy="scroll" data-target="#navbarSupportedContent" data-offset="98.14">
        <!-- Header -->
        <header class="main-header sticky-top">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
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
                                    <a class="dropdown-item" href="#">Gardenias</a>
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
>>>>>>> photos-apartments-home

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

<<<<<<< HEAD
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
=======
        <!-- Apartments -->
        <section id="departamentos" class="apartments">
            <div class="container">
                <div class="row text-center">
                    <div class="col pt-2 pb-2">
                        <h2>Departamentos</h2>
                        <small class="text-uppercase">pensados para ti</small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="images/assets/gardenias-01.jpg" alt="Departamento Gardenias" />
                            <div class="card-body">
                                <div class="badges">
                                    <span class="badge badge-warning">Departamento</span>
                                    <span class="badge badge-primary">Solteros</span>
                                </div>
                                <h5 class="card-title">Gardenias</h5>
                                <p class="card-text">Las gardenias son flores lindas y delicadas. Este departamento te ofrece un amplio y cálido espacio donde podrás pasar momentos únicos, tranquilidad... porque lo mereces.</p>
                                <a href="#" class="btn btn-primary">Leer más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="../images/assets/orquideas-02.jpg" alt="Departamento Gardenias" />
                            <div class="card-body">
                                <div class="badges">
                                    <span class="badge badge-warning">Departamento</span>
                                    <span class="badge badge-success">Familiar</span>
                                </div>
                                <h5 class="card-title">Orquídeas</h5>
                                <p class="card-text">Las orquídeas son flores que tienen colores vivos con grandes pétalos, las orquídeas al igual que nuestras instalaciones ofrecen un amplio y confortable lugar sin dejar a un lado la belleza y la elegancia.</p>
                                <a href="#" class="btn btn-primary">Leer más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Departamento Gardenias" />
                            <div class="card-body">
                                <div class="badges">
                                    <span class="badge badge-warning">Departamento</span>
                                    <span class="badge badge-dark">Parejas</span>
                                </div>
                                <h5 class="card-title">Lirios</h5>
                                <p class="card-text">Los lirios son flores con largos tallos, coloridos y bellos como ninguna otra flor. Este departamento cuenta con detalles que te brindarán paz y tranquilidad, calidad de vida que tú y tus seres queridos merecen.</p>
                                <a href="#" class="btn btn-primary">Leer más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Departamento Gardenias" />
                            <div class="card-body">
                                <div class="badges">
                                    <span class="badge badge-warning">Departamento</span>
                                    <span class="badge badge-success">Familiar</span>
                                </div>
                                <h5 class="card-title">Margaritas</h5>
                                <p class="card-text">Las margaritas como las hojas alargadas de esta flor, cuenta con un gran espacio para vivir en familia, habitaciones amplias y cálidas muy confortables. Quizás pienses en colocar un sofá en cada habitación.</p>
                                <a href="#" class="btn btn-primary">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Apartments -->
    
        <!-- Location -->
        <div id="ubicacion" class="container">
            <div class="row text-center">
                <div class="col pt-2 pb-2">
                    <h2>Ubicación</h2>
                    <small class="text-uppercase">encanto o patrimonio</small>
                </div>
            </div>
        </div>
        <section class="location">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6 pl-0 pr-0">
                        <img class="location-image" src="../images/assets/tepetlaoxtoc-1.jpg" alt="Tepetlaoxtoc Centro" />
                    </div>
                    <div class="col-12 col-lg-6 pt-4 pb-4 align-self-center">
                        <h2>Tepetlaoxtoc, Estado de México</h2>
                        <p class="text-justify">
                            Tepetlaoxtoc o Tepetlaoztoc es uno de los 125 municipios del estado de México, es reconocido a nivel internacional por sus códices, pinturas, películas, arquitectura, tradiciones, etc. Tepetlaoxtoc ha jugado un papel importante en la historia de México. Municipio localizado al noreste del Estado de México, sus límites son: al norte con Acolman, Teotihuacán, San Martín de las Pirámides y Otumba; al sur con Papalotla y Texcoco; al este con Tlaxcala y Puebla y al oeste con Acolman y Chiautla. Tepetlaoxtoc es una palabra náhuatl que significa: "en las cuevas de tepetate", lo cual es exacto corresponde con el cerro llamado Tepetloztoc.
                        </p>
                        <a class="btn btn-outline-light" target="_blank" href="https://es.wikipedia.org/wiki/Municipio_de_Tepetlaoxtoc">
                            Conoce más
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col pl-0 pr-0">
                        <div class="map-google">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Location -->
>>>>>>> photos-apartments-home

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
