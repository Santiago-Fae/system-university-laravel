<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $table = 'matricula';
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'aluno_id',
        'disciplina_id',
        'semestre',
    ];
}
