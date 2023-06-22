<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $aluno = Aluno::all(); 
        return $aluno; 
    }

   
    public function store(Request $request)
    {
        $newPost = Aluno::create([
            'nome' => $request->nome
        ]);

        return redirect('aluno/' . $newPost->id)->with('success', 'Exemplo criado com sucesso!');
    }

    public function show(Aluno $aluno)
    {   
        return $aluno; 
    }

    
    public function update(Request $request, Aluno $aluno)
    {
        $aluno->update([
            'nome' => $request->nome
        ]);

        return $request;
    }

    
    public function destroy(Aluno $aluno)
    {
        $aluno->delete();

        return redirect('/aluno');
    }
}
