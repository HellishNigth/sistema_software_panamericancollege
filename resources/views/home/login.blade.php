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
<body style="background: linear-gradient(to bottom, #6899be 19%, #205e8e 100%);">
    <div class="container-fluid vh-100 d-flex flex-column justify-content-center">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="row bg-light shadow-lg" style="height: 25rem;">
                    <!--Titulo y logo-->
                        <div class="col-lg-4 bg-primary d-flex flex-column justify-content-center align-items-center text-center">
                            <div class="p-2 mb-3 rounded">
                                <img src="{{asset('css/images/panamericanLogo.png')}}" class="redondo">
                            </div>
                            <h4 style="color: white;">Pan American College</h4>
                        </div>

                    <!--/Titulo y logo-->
                        <div class="col-8 bg-white d-flex flex-column justify-content-center">
                            <h4>Inició de sesión</h4>
                            <small>Proporcione sus credenciales para ingresar al sistema</small>
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="username">Nombre de Usuario</label>
                                            <input type="text" id="username" class="form-control" style="background-color: white;">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="password">Contraseña:</label>
                                            <input type="password" id="password" class="form-control" style="background-color: white;">
                                        </div>
                                        
                                        <div>
                                            <button class="btn btn-success">Iniciar Sesión</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <!--Formulario-->
    
                    <!--/Formulario-->
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>