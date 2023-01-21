<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatriculasController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(){
        return view('matriculas.index');
    }
}
