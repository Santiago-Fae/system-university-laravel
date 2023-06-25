<?php

namespace App\Http\Controllers;

use App\Models\Universidade;
use App\Services\UniversidadeService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class UniversidadeController extends Controller
{  
    private $universidadeService;
    public function __construct(UniversidadeService $universidadeService)
    {
        $this->universidadeService = $universidadeService;
    }
    public function index()
    {
        $universidade = Universidade::all(); 
        return $universidade; 
    }

   
    public function store(Request $request)
    {
        if ($this->universidadeService->verificaNomeDuplicado($request->nome)) {
            $errorResponse = [
                'error' => 'Nome duplicado!'
            ];
    
            return response()->json($errorResponse, Response::HTTP_BAD_REQUEST);
        }

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
