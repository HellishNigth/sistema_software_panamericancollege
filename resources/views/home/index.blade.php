@extends('layouts/master')

@section('contenido-principal')
<div class="row" style="margin-bottom: 2rem">
    <div class="col">
        <h3>Sistema Escolar</h3>
    </div>
</div>
<div class="row">
    <div class="col-3">
        <div class="card m-2">
            <img src="{{ asset('images/alumnos.png')}}" class="card-img-top" height="195">
            <div class="card-body bg-light">
                <h5 class="card-tittle text-center">Alumnos</h5>
                <div class="btn-group d-flex">
                    <a class="btn btn-outline-success" href="{{route('alumnos.index')}}">Buscar</a>
                    <a class="btn btn-outline-success" href="{{route('matriculas.index')}}">Matricular</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card m-2">
            <img src="{{ asset('images/alumnos.png')}}" class="card-img-top" height="195">
            <div class="card-body bg-light">
                <h5 class="card-tittle text-center">Apoderados</h5>
                <div class="btn-group d-flex">
                    <a class="btn btn-outline-success" href="{{route('apoderados.index')}}">Buscar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card m-2">
            <img src="{{ asset('images/Profesores.png')}}" class="card-img-top" height="195">
            <div class="card-body bg-light">
                <h5 class="card-tittle text-center">Profesores</h5>
                <div class="btn-group d-flex">
                    <a class="btn btn-outline-success" href="{{route('profesores.index')}}">Buscar</a>
                    <a class="btn btn-outline-success" href="{{route('profesores.index')}}">Agregar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card m-2">
            <img src="{{ asset('images/cursos.png')}}" class="card-img-top" height="195">
            <div class="card-body bg-light">
                <h5 class="card-tittle text-center">Cursos</h5>
                <div class="btn-group d-flex">
                    <a class="btn btn-outline-success" href="{{route('cursos.index')}}">Buscar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card m-2">
            <img src="{{ asset('images/noticias.png')}}" class="card-img-top" height="195">
            <div class="card-body bg-light">
                <h5 class="card-tittle text-center">Noticias</h5>
                <div class="btn-group d-flex">
                    <button class="btn btn-outline-success">Ver</button>
                    <button class="btn btn-outline-success">Agregar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card m-2">
            <img src="{{ asset('images/taller.png')}}" class="card-img-top" height="195">
            <div class="card-body bg-light">
                <h5 class="card-tittle text-center">Talleres</h5>
                <div class="btn-group d-flex">
                    <button class="btn btn-outline-success">Ver</button>
                    <button class="btn btn-outline-success">Agregar</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
            
        