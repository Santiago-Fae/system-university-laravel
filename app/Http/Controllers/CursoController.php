<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $curso = Curso::all(); 
        return $curso; 
    }

     public function create()
    {
        //show form to create a curso post
    }

   
    public function store(Request $request)
    {
        //store a new post
    }

    public function show(Curso $curso)
    {
        //show a curso post
    }

    
    public function edit(Curso $curso)
    {
        //show form to edit the post
    }

    
    public function update(Request $request, Curso $curso)
    {
        //save the edited post
    }

    
    public function destroy(Curso $curso)
    {
        //delete a post
    }
}