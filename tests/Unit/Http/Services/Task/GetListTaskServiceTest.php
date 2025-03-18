<?php

namespace Tests\Unit\Http\Services\Task;

use Mockery;
use Tests\TestCase;
use App\Models\Task;
use Mockery\MockInterface;
use App\Models\Responsible;
use App\Services\Task\GetListTaskService;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GetListTaskServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_list_returns_paginated_tasks()
    {
        // Arrange: Criando responsáveis fictícios
        Responsible::factory()->count(3)->create();

        // Arrange: Criando 10 tarefas fictícias
        Task::factory()->count(10)->create();

        // Act: Criando instância do serviço e chamando o método
        $service = new GetListTaskService();
        $data['status'] = null;
        $tasks = $service->getList($data); // Deve retornar um paginator

        // Assert: Verificando se o retorno é um paginator
        $this->assertInstanceOf(LengthAwarePaginator::class, $tasks);
    }
}
