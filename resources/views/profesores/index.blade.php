@extends('layouts/master')
@section('hojas-estilo')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
@endsection

@section('contenido-principal')
<div class="row col-12">
    <div class="col">
        <h3>Profesores</h3>
    </div>
</div>

<div class="row col">
    <!--Tabla-->
    <div class="col-9 col-lg-8 mt-1 mt-lg-0">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <th>RUT</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Asignaturas</th>
                <th>Cursos</th>
                <th>Acciones</th>
            </thead>
            <tr>
                <td>20567897-6</td>
                <td>Ignacio Andrés</td>
                <td>Opazo Castro</td>
                <td>kritka200@gmail.com</td>
                <td>+56997320540</td>
                <td>Lenguaje,Historia</td>
                <td>4Medio A, 8Básico</td>
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
</div>
    <!--/Tabla-->
<div class="row col">
    <!--Formulario-->
    <div class="col-14 ">
        <div class="card">
            <div class="card-header bg-secondary">
                Buscar Profesor
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="form-group ml-2">
                            <label for="nombre">Nombre Profesor:</label>
                            <input type="text" id="nombre" class="form-control" style="background-color: white;">
                        </div>
                        <div class="form-group ml-2">
                            <label for="rut">RUT Profesor:</label>
                            <input type="text" id="rut" class="form-control" style="background-color: white;">
                        </div>
                        <div class="form-group ml-2">
                            <button class="btn btn-warning">Cancelar</button>
                            <button class="btn btn-info">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--/Formulario-->

    <div class="col-14">
        <div class="card">
            <div class="card-header bg-secondary">
                Agregar Profesor
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="nom_tall">Nombre Profesor:</label>
                            <input type="text" id="nom_tall" class="form-control" style="background-color: white;">
                        </div>
                        <div class="form-group m-2">
                            <label for="dia_act">Aasignaturas:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Matematicas</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Lenguaje</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Historia</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Ingles</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Química</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Artes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Filosofia</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-7">
                        <label for="docen_sup">Telefono:</label>
                        <input type="text" id="docen_sup" class="form-control" style="background-color: white;">
                    </div>
                    <div class="col-6">
                        <label for="tipo_alumn">Cursos:</label>
                        <select name="tipo_alumn" id="tipo_alumn" class="form-control" style="background-color: white;">
                          <option value="1">4 Medio A</option>
                          <option value="2">8 Básico</option>
                          <option value="3">2 Medio</option>
                        </select>
                      </div>
                    <div class="form-group">
                        <button class="btn btn-warning">Cancelar</button>
                        <button class="btn btn-info">Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endsection