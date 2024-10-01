<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TarefaIntegracaoTests extends TestCase
{
    use RefreshDatabase;

    public function test_criar_tarefa_por_meio_da_api()
    {
        $response = $this->postJson('/api/tarefas', [
            'titulo' => 'Nova Tarefa',
            'descricao' => 'Descrição da nova tarefa',
            'concluida' => false
        ]);

        $response->assertStatus(201)->assertJson([
            'titulo' => 'Nova Tarefa',
            'descricao' => 'Descrição da nova tarefa',
            'concluida' => false
        ]);
    }
}
