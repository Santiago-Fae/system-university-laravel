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

   
    public function store(Request $request)
    {
        $newPost = Curso::create([
            'nome' => $request->nome,
            'universidade_id' => $request->universidade_id
        ]);

        return redirect('curso/' . $newPost->id)->with('success', 'Exemplo criado com sucesso!');
    }

    public function show(Curso $curso)
    {   
        return $curso; 
    }

    
    public function update(Request $request, Curso $curso)
    {
        $curso->update([
            'nome' => $request->nome,
            'universidade_id' => $request->universidade_id
        ]);

        return $request;
    }

    
    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect('/curso');
    }
}
