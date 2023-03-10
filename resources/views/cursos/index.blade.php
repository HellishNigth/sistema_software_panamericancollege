@extends('layouts.master')
@section('hojas-estilo')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
@endsection

@section('contenido-principal')
<div class="row col-12">
    <div class="col">
        <h3>Cursos</h3>
    </div>
</div>

<div class="row col-12 ml-0">
    <form class=" row col-5" role="search">
        <input class="form-control me-2 col-5 mr-1" type="search" placeholder="Buscar..." aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
</div>

<div class="row col mt-1">
    <!--Tabla-->
    <div class="col-9 col-lg-8 mt-1 mt-lg-0">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <th>N°</th>
                <th>Curso</th>
                <th>Paralelo</th>
                <th>Cantidad alumnos</th>
                <th>Cupos</th>
                <th colspan="4">Acciones</th>
            </thead>
            @foreach ($cursos as $num=>$curso)
            <tr>
                <td>{{$num+1}}</td>
                <td>{{$curso->CR}}</td>
                <td>{{$curso->PL}}</td>
                <td>{{$curso->cantidadAlumnos}}</td>
                <td>{{$curso->cupos}}</td>
                <td>
                    <!--Borrar-->
                    <form method="POST" action="{{route('cursos.destroy',$curso->id)}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger" title="Borrar Curso">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </form>
                    <!--/Borrar-->
                </td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning" title="Editar Curso">
                        <i class="far fa-edit"></i>
                    </a>
                </td>
                <td>
                    <a href="#" class="btn btn-sm btn-success" title="Ver Curso">
                        <i class="fas fa-user-friends"></i>
                    </a>
                </td>
                <td>
                    <a href="#" class="btn btn-sm btn-light" title="Imprimir datos del curso">
                        <i class="fas fa-solid fa-inbox"></i>
                    </a>
                </td>
            </tr>  
            @endforeach
        </table>
    </div>
    <!--/Tabla-->

    <!--Formulario-->
    <div class="col-4">
        <div class="card">
            <div class="card-header bg-secondary">
                Agregar Curso
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('cursos.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="curso">Curso:</label>
                        <input type="text" id="curso" name="nom_curso" class="form-control" style="background-color: white;">
                    </div>
                    <div class="form-group">
                        <label for="paralelo">Paralelo:</label>
                        <input type="text" id="paralelo" name="paralelo" class="form-control" style="background-color: white;">
                    </div>
                    <div class="form-group">
                        <label for="cupos">Cupos:</label>
                        <input type="text" id="cupos" name="cupos" class="form-control" style="background-color: white;">
                    </div>
                    <div class="form-group">
                        <button type="reset" class="btn btn-warning">Cancelar</button>
                        <button type="submit" class="btn btn-info">Agregar</button>
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
