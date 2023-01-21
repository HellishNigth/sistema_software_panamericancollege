@extends('layouts.master')

@section('hojas-estilo')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
@endsection


@section('contenido-principal')
<div class="row">
    <div class="col">
        <h3>Cursos</h3>
    </div>
</div>

<div class="row m-0">
    <!--Tabla-->
    <div class="col-12 col-lg-8 mt-1 mt-lg-0">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <th>N°</th>
                <th>Nombre</th>
                <th>Cantidad alumnos</th>
                <th>Docente supervisor</th>
                <th>Dias de actividades</th>
                <th>Horario inicio</th>
                <th>Horario termino</th>
                <th>Acciones</th>
            </thead>
            <tr>
                <td>1</td>
                <td>Karate</td>
                <td>15</td>
                <td>Enriquez Mendoza</td>
                <td>Lunes, Miercoles, Viernes</td>
                <td>17:00</td>
                <td>18:00</td>
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
        </table>
    </div>
    <!--/Tabla-->

    <!--Formulario-->
    <div class="col-4">
        <div class="card">
            <div class="card-header bg-secondary">
                Agregar Taller
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="nom_tall">Nombre Taller:</label>
                        <input type="text" id="nom_tall" class="form-control" style="background-color: white;">
                    </div>
                    <div class="form-group">
                        <label for="docen_sup">Docente supervisor:</label>
                        <input type="text" id="docen_sup" class="form-control" style="background-color: white;">
                    </div>
                    <div class="form-group m-2">
                        <label for="dia_act">Dias de actividades:</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Lunes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Martes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Miercoles</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Jueves</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Viernes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Sábado</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Domingo</label>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-5">
                            <label for="h_i" class="row ml-2">Hora inicio:</label>
                            <input type="text" id="h_i" class="form-control" style="background-color: white;">
                        </div>
                        <div class="col-5">
                            <label for="h_t" class="row">Hora Termino:</label>
                            <input type="text" id="h_t" class="form-control" style="background-color: white;">
                        </div>
                    </div> 
                    <div class="form-group">
                        <button class="btn btn-warning">Cancelar</button>
                        <button class="btn btn-info">Agregar</button>
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