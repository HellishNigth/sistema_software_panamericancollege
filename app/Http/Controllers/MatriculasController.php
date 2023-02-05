<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matricula;
use App\Models\Curso;
use App\Models\Alumno;

class MatriculasController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(){
        $matriculas = Matricula::all();
        $cursos = Curso::all();
        $alumnos = Alumno::all();
        return view('matriculas.index',compact('matriculas','cursos','alumnos'));
    }

    public function store(Request $request){
        $matricula = new Matricula();
        $alumno = new Alumno();
        $alumno->AL_DP_RUT = $reques->rut_alumn;
        $alumno->AL_DP_ED = $reques->edad_alumn;
        $alumno->AL_DP_NB = $reques->nom_alumn;
        $alumno->AL_DP_APPA = $reques->ape_pa_alumn;
        $alumno->AL_DP_APMA = $reques->ape_ma_alumn;
        $alumno->AL_DP_GN = $reques->genero_alumn;
        $alumno->AL_DP_CR = $reques->cursos;
        $alumno->AL_DP_PL = $reques->paralelos;
        $alumno->AL_DP_FCI = $reques->nom_alumn;
        $alumno->AL_DP_FCE = $reques->nom_alumn;
        $alumno->AL_DP_CLA = 0;
        $matricula->MTR_SM = $request->cant_sem;
        $matricula->MTR_EST = $request->tipo_alumn;
        $matricula->save();
        return redirect()->route('alumnos.index');
    }
}
