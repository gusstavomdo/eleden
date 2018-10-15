<!doctype html>
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

        <title>El Edén, el mejor lugar para vivir</title>

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

        <!-- Gallery -->
        <section class="gallery">
            <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../images/assets/eleden-04.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../images/assets/eleden-06.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../images/assets/eleden-05.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../images/assets/eleden-04.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../images/assets/eleden-05.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../images/assets/eleden-06.jpg" alt="Third slide">
                    </div>
                </div>
                <div class="overlay">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6 offset-md-6 text-center text-md-right">
                                <h1>El mejor lugar para vivir</h1>
                                <p class="d-none d-md-block">
                                    Te ofrecemos departamentos completamente nuevos 
                                    con todos los servicios para que tú y los tuyos 
                                    se sientan como en casa. Por su ubicación 
                                    estarás a 10 mins del nuevo Aeropuerto de la
                                    Ciudad de México ¿Dónde? sólo en <strong>
                                    Tepetlaoxtoc</strong>, te esperamos!
                                </p>
                                <a href="#" class="btn btn-outline-light">Visitar</a>
                                <button type="button" class="btn btn-eleden" data-toggle="modal" data-target="#modalDescuento">Quiero un descuento</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Gallery -->

        <!-- About Us -->
        <section id="nosotros" class="aboutus">
            <div class="container">
                <div class="row text-center">
                    <div class="col pt-2 pb-2">
                        <h2>Nosotros</h2>
                        <small class="text-uppercase">un poco de historia</small>
                    </div>
                </div>
                <div class="row text-justify">
                    <div class="col">
                        <p>La historia de nuestro <strong>Edén</strong> es como
                        cualquier otra buena idea de emprendimiento. En 2018 se 
                        mantuvo la visión de que todas las personas deben tener 
                        acceso a una vivienda digna y a un precio justo. Fue así 
                        como apostamos por un proyecto y se decidió a emprender en 
                        el negocio de bienes raíces, ofreciendo departamentos en 
                        renta al alcance de tu bolsillo. Cuando comienzas a 
                        construir un patrimonio se requiere de mucho esfuerzo y 
                        trabajo, necesitas oportunidades que te ayuden a realizar 
                        tus sueños y muchas de las veces requieres un <strong>
                        departamento</strong> para trabajar o vivir mientras 
                        construyes tu casa, entonces <em>¿cuál es el problema?</em>
                        ... cuentas con un presupuesto limitado, sin embargo sabemos 
                        lo importante que es para ti contar con una vivienda 
                        confortable, acércate con nosotros ¡podemos ayudarte! 
                        tenemos una opción para ti.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Us -->

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
                            <img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Departamento Gardenias" />
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
                            <img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Departamento Gardenias" />
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
                    <div class="col-12 col-lg-6 pl-0 pr-0">
                        <div id="map"></div>
                            <script>
                                var map;
                                function initMap() {
                                    map = new google.maps.Map(document.getElementById('map'), {
                                    center: {lat: -98.8264572, lng: 19.5675648},
                                    zoom: 8
                                    });
                                }
                            </script>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Location -->

        <!-- Form Contact -->
        <section id="contacto" class="contact-form pt-3 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>Contáctanos</h2>
                        <small class="text-uppercase">¿Necesitas más información?</small>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center mt-2 mb-2">
                        Anota tus datos y cuéntanos que dudas tienes.
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 pt-2">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-12 col-md-6">
                                    <input type="text" class="form-control" placeholder="Nombre">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <input type="text" class="form-control" placeholder="Apellido">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <textarea name="text" class="form-control form-control-lg" placeholder="Escribe tu mensaje"></textarea>
                                    <small class="form-text text-muted">
                                        En <abbr data-toogle="tooltip" title="menos de 2 horas">tiempo express</abbr> un asesor te estará brindado la información que solicitas.
                                    </small>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <button type="button" class="btn btn-eleden btn-block">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Form Contact -->

        <!-- Footer -->
        <footer id="footer" class="footer-website pb-4 pt-4">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12 col-lg">
                        <a href="#">Preguntas frecuentes</a>
                    </div>
                    <div class="col-12 col-lg">
                        <a href="https://reactium.com" target="_blank">Reactium.com</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /Footer -->

        <!-- Modal -->
        <div class="modal fade" id="modalDescuento" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Renta a un mejor precio</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">f</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Usuario facebook" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>  
                            </div>
                        </form>
                        <div class="alert alert-warning" role="alert">
                            Recibirás un mensaje con el <a href="#" class="alert-link">cupón de descuento</a>.
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-eleden">Ordenar</button>
                    </div>
                </div>
            </div>
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
