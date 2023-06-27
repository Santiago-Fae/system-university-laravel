<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SwitchDatabase
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Lógica para determinar a conexão do banco de dados
        $databaseConnection = $this->determineDatabaseConnection($request);

        // Definir a conexão do banco de dados
        DB::setDefaultConnection($databaseConnection);

        return $next($request);
    }
    
    private function determineDatabaseConnection($request)
    {
        // Implemente a lógica para determinar a conexão do banco de dados aqui
        // Pode ser uma verificação de parâmetro da URL, cabeçalho da requisição, etc.

        // Exemplo: verificar parâmetro da URL
        if ($request->header('Database')) {
            $database = $request->header('Database');

            // Verificar se o nome do banco de dados é válido
            if (in_array($database, ['mysql', 'postgresql'])) {
                return $database; // Retornar o nome da conexão do banco de dados
            }
        }

        // Caso nenhum critério seja atendido, retornar a conexão padrão
        return 'mysql';
    }
}
