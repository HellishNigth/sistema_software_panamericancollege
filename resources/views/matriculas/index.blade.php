@extends('layouts/master')

@section('contenido-principal')
<div class="row">
    <div class="col">
        <h3>Matriculas</h3>
    </div>
</div>
<div class="col-12">
    <div class="card m-2">
        <div class="card-body bg-light">
            <div class="row">
                <div class="col-2">
                    <label for="nom_alumn">Nombres Alumno:</label>
                    <input type="text" id="nom_alumn" class="form-control" style="background-color: white;">
                </div>
                <div class="col-2">
                    <label for="edad_alumn">Edad Alumno:</label>
                    <input type="number" id="edad_alumn" class="form-control" style="background-color: white;">
                </div>
                <div class="col-2">
                    <label for="ape_pa_alumn">Apellido Paterno:</label>
                    <input type="text" id="ape_pa_alumn" class="form-control" style="background-color: white;">
                </div>
                <div class="col-2">
                    <label for="ape_ma_alumn">Apellido Materno:</label>
                    <input type="text" id="ape_ma_alumn" class="form-control" style="background-color: white;">
                </div>
                <div class="form-group col-3">
                    <label for="imagenAlumn">Imagen del alumno:</label>
                    <input type="file" id="imagenAlumn" name="imagenAlumn" class="form-control-file">
                </div>
                <div class="col-2">
                    <label for="genero_alumn">Genero Alumno:</label>
                    <input type="text" id="genero_alumn" class="form-control" style="background-color: white;">
                </div>
                <div class="col-2">
                    <label for="rut">RUT Alumno:</label>
                    <input type="text" id="rut_alumn" class="form-control" style="background-color: white;">
                </div>
                <div class="col-2">
                    <label for="cursos">Cursos:</label>
                    <select name="cursos" id="cursos" class="form-control" style="background-color: white;">
                        @foreach ($cursos as $curso)
                            <option value="{{$curso->id}}">{{$curso->CR}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-2">
                    <label for="paralelos">Paralelos:</label>
                    <select name="paralelos" id="paralelos" class="form-control" style="background-color: white;">
                        @foreach ($cursos as $curso)
                            <option value="{{$curso->id}}">{{$curso->PL}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-2">
                    <label for="talleres">Plan de salud:</label>
                    <select name="cursos" id="cursos" class="form-control" style="background-color: white;">
                        <option value="1">Fonasa</option>
                        <option value="2">Isapre</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="alergias" class="row m-2">Alergias del alumno:</label>
                    <textarea class="col-10 m-2" placeholder="Escriba alergias...." id="alergias" style="height: 100px;background-color: white;"></textarea>
                </div>
                <div class="col-2">
                    <label for="apo_nom">Apoderado Nombres:</label>
                    <input type="text" id="apo_nom" class="form-control" style="background-color: white;">
                </div>
                <div class="col-3">
                    <label for="apo_appa">Apoderado Apellido Paterno:</label>
                    <input type="text" id="apo_appa" class="form-control" style="background-color: white;">
                </div>
                <div class="col-3">
                    <label for="apo_nom">Apoderado Apellido Materno:</label>
                    <input type="text" id="apo_nom" class="form-control" style="background-color: white;">
                </div>
                <div class="col-2">
                    <label for="apo_gen">Genero Apoderado:</label>
                    <input type="text" id="apo_gen" class="form-control" style="background-color: white;">
                </div>
                <div class="col-2">
                    <label for="edad_apo">Edad Apoderado:</label>
                    <input type="number" id="edad_apo" class="form-control" style="background-color: white;">
                </div>
                <div class="col-2">
                    <label for="email_apo">Email Apoderado:</label>
                    <input type="number" id="email_apo" class="form-control" style="background-color: white;">
                </div>
                <div class="col-2">
                    <label for="tel_apo">Telefono de emergencia:</label>
                    <input type="text" id="tel_apo" class="form-control" style="background-color: white;">
                </div>
                <div class="col-2">
                    <label for="rut_apo">RUT Apoderado:</label>
                    <input type="text" id="rut_apo" class="form-control" style="background-color: white;">
                </div>
                <div class="col-2">
                    <label for="tipo_alumn">Tipo de alumno:</label>
                    <select name="tipo_alumn" id="tipo_alumn" class="form-control" style="background-color: white;">
                        <option value="1">prioritario</option>
                        <option value="2">tipo 2</option>
                        <option value="3">tipo 3</option>
                    </select>
                </div>
                <div class="col-2">
                    <label for="fecha_inicio">Fecha inicio:</label>
                    <input type="date" id="fecha_inicio" class="form-control" style="background-color: white;">
                </div>
                <div class="col-2">
                    <label for="fecha_final">Fecha final:</label>
                    <input type="date" id="fecha_final" class="form-control" style="background-color: white;">
                </div>
                <div class="col-12">
                    <div class="btn-group d-flex m-2">
                        <button class="btn btn-outline-success">Matricular</button>
                        <button class="btn btn-outline-success">Limpiar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    