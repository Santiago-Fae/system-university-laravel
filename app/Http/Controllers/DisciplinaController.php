<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function index()
    {
        $disciplina = Disciplina::all(); 
        return $disciplina; 
    }

   
    public function store(Request $request)
    {
        $newPost = Disciplina::create([
            'nome' => $request->nome,
            'curso_id' => $request->curso_id
        ]);

        return redirect('disciplina/' . $newPost->id)->with('success', 'Exemplo criado com sucesso!');
    }

    public function show(Disciplina $disciplina)
    {   
        return $disciplina; 
    }

    
    public function update(Request $request, Disciplina $disciplina)
    {
        $disciplina->update([
            'nome' => $request->nome,
            'curso_id' => $request->curso_id
        ]);

        return $request;
    }

    
    public function destroy(Disciplina $disciplina)
    {
        $disciplina->delete();

        return redirect('/disciplina');
    }
}
