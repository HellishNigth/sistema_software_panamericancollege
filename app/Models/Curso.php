<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'cursos';

    public function matricula(){
        return $this->hasMany('App\Models\Matricula');
    }
}
