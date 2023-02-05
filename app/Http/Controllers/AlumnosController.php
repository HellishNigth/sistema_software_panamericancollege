<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){
        $alumnos = Alumno::all();
        return view('alumnos.index',compact('alumnos'));
    }
}
