<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Universidade;

class UniversidadeControllerTest extends TestCase
{
    use DatabaseTransactions; 

    public function testStore()
    {
        $data = [
            'nome' => 'Nome da Universidade',
            'id' => 2
        ];

        $response = $this->post('/universidade', $data);

        $response->assertRedirect(); // Verifica se houve um redirecionamento
        $response->assertSessionHas('success'); // Verifica se a mensagem de sucesso está presente na sessão

        $universidade = Universidade::first();
        $this->assertEquals($data['nome'], $universidade->nome); // Verifica se o nome foi salvo corretamente no banco de dados
    }
}
