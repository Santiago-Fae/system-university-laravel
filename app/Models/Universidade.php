<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universidade extends Model
{
    public $timestamps = false;
    protected $table = 'universidade';
    use HasFactory;
    protected $fillable = [
        'nome',
    ];
}
