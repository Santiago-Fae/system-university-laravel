<?php

namespace App\Services;

use App\Models\Universidade;

class UniversidadeService
{
    public function verificaNomeDuplicado($nome)
    {
        $universidade = Universidade::where('nome', $nome)->first();

        return $universidade !== null;
    }
}
?>