@extends('layouts/master')
@section('hojas-estilo')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
@endsection

@section('contenido-principal')
<div class="col-12">
    <div class="row">
        <div class="col">
            <h3>Alumnos</h3>
        </div>
    </div>
</div>
<div class="row col">
    <!--Tabla-->
    <div class="col-12 col-lg-8 mt-1 mt-lg-0">
        <table class="col-12 table table-bordered table-striped table-hover">
            <thead>
                <th>N°</th>
                <th>RUT</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Curso</th>
                <th>Paralelo</th>
                <th>Acciones</th>
            </thead>
            @foreach ($alumnos as $num=>$alumno)
            <tr>
                <td>{{$num+1}}</td>
                <td>{{$alumno->AL_DP_RUT}}</td>
                <td>{{$alumno->AL_DP_NB}}</td>
                <td>{{$alumno->AL_DP_APPA}} {{$alumno->AL_DP_APMA}}</td>
                <td>{{$alumno->AL_DP_CR}}</td>
                <td>{{$alumno->AL_DP_PL}}</td>
                <td>
                    <a href="#" class="btn btn-sm btn-danger">
                        <i class="far fa-trash-alt"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-warning">
                        <i class="far fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-success">
                        <i class="fas fa-user-friends"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-light">
                        <i class="fas fa-solid fa-inbox"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <!--/Tabla-->

    <!--Formulario-->
    <div class="col-12 col-lg-4 order-lg-1">
        <div class="card">
            <div class="card-header bg-secondary">
                Buscar Alumno
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="nombre">Nombre Alumno:</label>
                        <input type="text" id="nombre" class="form-control" style="background-color: white;">
                    </div>
                    <div class="form-group">
                        <label for="rut">RUT Alumno:</label>
                        <input type="text" id="rut" class="form-control" style="background-color: white;">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-warning">Cancelar</button>
                        <button class="btn btn-info">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--/Formulario-->
</div>
@endsection
@section('scripts')
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endsection