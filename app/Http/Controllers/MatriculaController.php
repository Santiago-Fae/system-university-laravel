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
            'aluno_id' => $request->aluno_id,
            'disciplina_id' => $request->disciplina_id,
            'semestre' => $request->semestre
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
            'aluno_id' => $request->aluno_id,
            'disciplina_id' => $request->disciplina_id,
            'semestre' => $request->semestre
        ]);

        return $request;
    }

    
    public function destroy(Matricula $matricula)
    {
        $matricula->delete();

        return redirect('/matricula');
    }
}
