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
                    <label for="ape_alumn">Apellidos Alumno:</label>
                    <input type="text" id="ape_alumn" class="form-control" style="background-color: white;">
                </div>
                <div class="col-2">
                    <label for="genero">Genero:</label>
                    <input type="text" id="genero" class="form-control" style="background-color: white;">
                </div>
                <div class="col-2">
                    <label for="rut">RUT:</label>
                    <input type="text" id="rut" class="form-control" style="background-color: white;">
                </div>
                <div class="form-group col-3">
                    <label for="imagenAlumn">Imagen del alumno:</label>
                    <input type="file" id="imagenAlumn" name="imagenAlumn" class="form-control-file">
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
                    <label for="apo">Apoderado:</label>
                    <input type="text" id="apo" class="form-control" style="background-color: white;">
                </div>
                <div class="col-2">
                    <label for="tel_emg">Telefono de emergencia:</label>
                    <input type="text" id="tel_emg" class="form-control" style="background-color: white;">
                </div>
                <div class="col-2">
                    <label for="cursos">Cursos:</label>
                    <select name="cursos" id="cursos" class="form-control" style="background-color: white;">
                        <option value="1">4 Medio A</option>
                        <option value="2">4</option>
                        <option value="3">tipo 3</option>
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
    