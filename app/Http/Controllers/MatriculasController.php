<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matricula;
use App\Models\Curso;

class MatriculasController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(){
        $matriculas = Matricula::all();
        $cursos = Curso::all();
        return view('matriculas.index',compact('matriculas','cursos'));
    }

    public function store(Request $request){
        $matricula = new Matricula();
        $matricula->MTR_SM = $request->cant_sem;
        $matricula->MTR_EST = $request->tipo_alumn;
        $matricula->save();
        return redirect()->route('alumnos.index');
    }
}
