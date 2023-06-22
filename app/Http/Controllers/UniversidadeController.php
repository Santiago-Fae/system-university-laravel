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

    
    public function update(Request $request, Universidade $universidade)
    {
        $universidade->update([
            'nome' => $request->nome
        ]);

        return $request;
    }

    
    public function destroy(Universidade $universidade)
    {
        $universidade->delete();

        return redirect('/universidade');
    }
}
