<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TalleresController extends Controller
{
    public function index(){
        return view('talleres.index');
    }
}
