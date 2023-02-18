<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matricula;
use App\Models\Curso;
use App\Models\Alumno;
use App\Models\Apoderado;

class MatriculasController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(){
        $matriculas = Matricula::all();
        $cursos = Curso::all();
        $alumnos = Alumno::all();
        $apoderados = Apoderado::all();
        return view('matriculas.index',compact('matriculas','cursos','alumnos','apoderados'));
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
        $apoderado = new Apoderado();
        $apoderado->APO_DP_RUT = $request->rut_apo;
        $apoderado->APO_DP_ED = $request->edad_apo;
        $apoderado->APO_DP_NB = $request->apo_nom;
        $apoderado->APO_DP_APPA = $request->apo_appa;
        $apoderado->APO_DP_APMA = $request->apo_apma;
        $apoderado->APO_DP_GN = $request->apo_gen;
        $apoderado->APO_DP_EMAIL = $request->email_apo;
        $apoderado->APO_DP_TEL = $request->tel_apo;
        $apoderado->APO_DP_DOM = $request->domicilio;
        $apoderado->APO_DP_PARENT = $request->parentesco;
        $apoderado->total_alumn +=1;
        $apoderado->save();
        return redirect()->route('alumnos.index');
    }
}
