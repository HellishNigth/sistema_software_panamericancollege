<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Matricula;

class AlumnosController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){
        $alumnos = Alumno::all();
        $matriculas = Matricula::all();
        return view('alumnos.index',compact('alumnos','matriculas'));
    }
}
