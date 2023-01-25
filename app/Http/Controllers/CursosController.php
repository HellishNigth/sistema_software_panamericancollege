<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursosController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(){
        $cursos = Curso::all();
        return view('cursos.index',compact('cursos'));
    }

    public function store(Request $request){
        $curso = new Curso();
        $curso->CR = $request->nom_curso;
        $curso->PL = $request->paralelo;
        $curso->cantidadAlumnos = 0;
        $curso->cupos = $request->cupos;
        $curso->save();
        return redirect()->route('cursos.index');
    }
}
