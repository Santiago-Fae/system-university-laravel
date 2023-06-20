<?php

namespace App\Http\Controllers;

use App\Models\Universidade;
use Illuminate\Http\Request;

class UniversidadeController extends Controller
{
    public function index()
    {
        $universidade = Universidade::all(); 
        return $universidade; 
    }

     public function create()
    {
        //show form to create a universidade post
    }

   
    public function store(Request $request)
    {
        //store a new post
    }

    public function show(Universidade $universidade)
    {
        return $universidade; 
    }

    
    public function edit(Universidade $universidade)
    {
        //show form to edit the post
    }

    
    public function update(Request $request, Universidade $universidade)
    {
        //save the edited post
    }

    
    public function destroy(Universidade $universidade)
    {
        //delete a post
    }
}
