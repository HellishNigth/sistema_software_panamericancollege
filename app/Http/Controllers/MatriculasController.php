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
        $matricula->MTR_FECHA_INICIO = $request->fecha_inicio;
        $matricula->MTR_FECHA_FINAL = $request->fecha_final;
        $matricula->MTR_EST = $request->tipo_alumn;
        $matricula->save();
        $alumno = new Alumno();
        $alumno->AL_DP_RUT = $request->rut_alumn;
        $alumno->AL_DP_ED = $request->edad_alumn;
        $alumno->AL_DP_NB = $request->nom_alumn;
        $alumno->AL_DP_APPA = $request->ape_pa_alumn;
        $alumno->AL_DP_APMA = $request->ape_ma_alumn;
        $alumno->AL_DP_GN = $request->genero_alumn;
        $alumno->AL_DP_CR = $request->cursos_alumn;
        $alumno->AL_DP_PL = $request->paralelos_alumn;
        $alumno->AL_DP_FCI = $request->fecha_inicio;
        $alumno->AL_DP_FCE = $request->fecha_final;
        $alumno->AL_DP_CLA = 0;
        $alumno->curso_id = $request->cursos_alumn;
        $alumno->save();
        return redirect()->route('alumnos.index');
    }
}
