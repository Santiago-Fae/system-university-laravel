<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $table = 'disciplina';
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'nome',
        'curso_id',
    ];
}
