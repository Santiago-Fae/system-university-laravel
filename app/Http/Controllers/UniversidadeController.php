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
        $newPost = Universidade::create([
            'nome' => $request->nome
        ]);

        return redirect('universidade/' . $newPost->id)->with('success', 'Exemplo criado com sucesso!');
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
        $universidade->update([
            'nome' => $request->nome
        ]);

        return redirect('universidade');
    }

    
    public function destroy(Universidade $universidade)
    {
        //delete a post
    }
}
