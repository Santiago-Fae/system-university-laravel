<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    public function index()
    {
        $matricula = Matricula::all(); 
        return $matricula; 
    }

   
    public function store(Request $request)
    {
        $newPost = Matricula::create([
            'nome' => $request->nome
        ]);

        return redirect('matricula/' . $newPost->id)->with('success', 'Exemplo criado com sucesso!');
    }

    public function show(Matricula $matricula)
    {   
        return $matricula; 
    }

    
    public function update(Request $request, Matricula $matricula)
    {
        $matricula->update([
            'nome' => $request->nome
        ]);

        return $request;
    }

    
    public function destroy(Matricula $matricula)
    {
        $matricula->delete();

        return redirect('/matricula');
    }
}
