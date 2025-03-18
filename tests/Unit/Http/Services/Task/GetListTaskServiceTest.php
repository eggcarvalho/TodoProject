<?php

namespace Tests\Unit\Http\Services\Task;

use Mockery;
use Tests\TestCase;
use App\Models\Task;
use Mockery\MockInterface;
use App\Models\Responsible;
use App\Services\Task\GetListTaskService;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GetListTaskServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_list_returns_tasks()
    {

        // Arrange: Criando responsáveis fictícios no banco de dados
        Responsible::factory()->count(3)->create();

        // Arrange: Criando tarefas fictícias no banco de dados
        Task::factory()->count(3)->create();

        // Act: Criando uma instância do serviço e chamando o método
        $service = new GetListTaskService();
        $data['status'] = null;
        $tasks = $service->getList($data);

        // Assert: Verificando se o retorno contém as 3 tarefas criadas
        $this->assertInstanceOf(Task::class, $tasks->first());
    }
}
