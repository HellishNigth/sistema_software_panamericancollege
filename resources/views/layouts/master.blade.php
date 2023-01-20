<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de administracion escolar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    
</head>
<body class="bg-body-tertiary">
  <div class="container-fliuid p-0">
    <!--usuario-->
    <div class="row text-white m-0" style="background-color: #222">
        <div class="col-8">
            Bienvenido <b>User 1</b>
        </div>
        <div class="col text-right">
            <small>Ultimo inicio de sesión: 09/01/2023 a 14:30</small>
        </div>
        <div class="col-1 text-right">
            <a href="/dist/index.html" class="text-white">Cerrar Sesión</a>
        </div>
    </div>
    <!--/usuario-->

    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark m-0" style="background-color: #205e8e">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Pan American College</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/dist/home.html">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/dist/matriculas.html">Matriculas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/dist/alumnos.html">Buscar Alumnos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/dist/profesores.html">Buscar Profesores
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/dist/cursos.html">Cursos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/dist/talleres.html">Talleres</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                Opciones
              </a>
              <ul class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--/navbar-->

    <!--contenido-->
    <div class="row p-2 m-0">
        @yield('contenido-principal')
    </div>
    <!--/contenido-->
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>