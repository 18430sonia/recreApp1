<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="icon" href="img/favicon.ico">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="img/css/fontello.css">

    <title>RecreAdultos</title>
  </head>
  <body>

    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="img/logo1.png" class="img-fluid" width="150px" height="150px"
              alt=""></a>
          <!-- <a class="navbar-brand" href="#">RecreAdultos</a> -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <li><a target="_blank" href="#"><i style="color: #1fa1a2; font-size: 30px" class="icon-home" title="INICIO"></i></a> </li>
                </li>

              <li class="nav-item dropdown fw-bold  d-flex">
                <a class="nav-link align-self-center   dropdown-toggle"  style="color:#000" href="#" id="navbarDropdown"
                  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Nuestro proposito
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Visión</a></li>
                  <li><a class="dropdown-item" href="#">Misión</a></li>
                  <li><a class="dropdown-item" href="#">Nuestro proposito</a></li>

                </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item d-flex">
                <a class="nav-link align-self-center active me-3" style="color:#000" aria-current="page"
                target="_blank"  href="{{route('actividad')}}">Actividades</a>
              </li>


              <li class="nav-item dropdown  d-flex">
                <a class="nav-link align-self-center dropdown-toggle" style="color: #000" href="#" id="navbarDropdown"
                  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Personas mayores
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Me quedo en casa</a></li>
                  <li><a class="dropdown-item" href="#">Noticias</a></li>
                  <li><a class="dropdown-item" href="#">Cifras</a></li>
                  <li><a class="dropdown-item" href="#">Documentos</a></li>
                </ul>
              </li>
              <li class="nav-item d-flex">
                <a class="nav-link align-self-center active me-3" style="color:#000" aria-current="page"
                  href="#">Contactanos</a>
              </li>
               @if (Route::has('login'))
                    <div class="justify-content-end">
                        @auth

                            <a href="{{ url('/dashboard') }}" class="btn btn-info btn-block" class="text-end">Dashboard</a>
                        @else
                    </div>

                            <div class="text-end">
                                <a href="{{ route('login') }}" class="btn btn-success btn-block">Iniciar sesión</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-success btn-block">Registrarse</a>
                            @endif
                            </div>
                        @endauth
                    </div>
                @endif
            </ul>
          </div>
        </div>
      </nav>

    <main>
        <div class="container">
             @yield('contenido-principal')
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>


    <footer class='background-color='#00C3AF'  class="text-dark">
        <div class="container">
          <nav class="row justify-content-center">
            <a href="#" class="col-12 col-md-3 text-reset text-uppercase d-flex
            align-items-center justify-content-center mb-3 mb-md-0">
              <img src="img/logo1.png" alt="logo weston" class="img-logo mr-2">
            </a>
            <ul class="col-5 col-md-3 list-unstyled">
              <li class="font-weight-bold text-uppercase fw-bold"><h5>Instituciones</h5></li>
              <li><a target="_blank" href="https://www.cauca.gov.co/Paginas/Default.aspx" class="text-reset text-decoration-none">Gobernacion Del Cauca</a></li>
              <li><a  target="_blank"href="https://www.indeportescauca.gov.co/" class="text-reset text-decoration-none">Indeportes Cauca</a></li>
              <li><a target="_blank" href="http://www.popayan.gov.co/" class="text-reset text-decoration-none">Alcaldia De Popayán</a></li>



            </ul>
            <ul class="col-5 col-md-3 list-unstyled">
              <li class="font-weight-bold text-uppercase fw-bold "><h5>Hogares Geríatricos</h5></li>
              <li><a target="_blank" href="https://acaricampestre.org/" class="text-reset text-decoration-none">Casa Campestre</a></li>
              <li><a target="_blank" href="https://www.saldarriagaconcha.org/indice-personas-mayores/?gclid=CjwKCAjwmv-DBhAMEiwA7xYrd0nxedbX6tACrwa6mkWztDOsxUFrCj0bO3cvQhL7kD3Rpt55arzUthoCgOQQAvD_BwE " class="text-reset text-decoration-none">Fundacion Saldarriaga Concha</a></li>
              <li><a target="_blank" href="https://www.ancianatosanvicentepopayan.com/" class="text-reset text-decoration-none">Fundacion Hogar San Vicente Paul</a></li>


            </ul>
            <ul class="col-10 col-md-3 list-unstyled">
              <li class="font-weight-bold text-uppercase"><h5>Redes Sociales</h5></li>
            <li class="d-flex justify-content-between">
              <a href="https://www.facebook.com/" class="text-reset">
                <i class="icon-facebook-squared"style="color:#000; font-size: 30px"></i></a>

              <a target="_blank" href="https://www.instagram.com/" class="text-reset">
                <i class="icon-instagram" style="color:#000; font-size: 30px"></i></a>

              <a target="_blank" href="https://accounts.google.com/signin/v2/identifier?passive=1209600&continue=https%3A%2F%2Faccounts.google.com%2Fb%2F0%2FAddMailService&followup=https%3A%2F%2Faccounts.google.com%2Fb%2F0%2FAddMailService&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="text-reset">
                <i class="icon-mail" style="color:#000; font-size: 30px"></i></a>

              <a target="_blank" href="https://www.youtube.com/" class="text-reset">
                <i class="icon-youtube-play"style="color:#000; font-size: 30px"></i></a>


            </li>
            </ul>
          </nav>

        </div>

      </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>