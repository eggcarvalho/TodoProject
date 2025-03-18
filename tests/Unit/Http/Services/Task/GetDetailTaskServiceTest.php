<?php

namespace Tests\Unit\Http\Services\Task;

use Tests\TestCase;
use App\Models\Task;
use App\Models\Responsible;
use App\Services\Task\GetDetailTaskService;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GetDetailTaskServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_detail_task()
    {

        // Arrange: Criando responsáveis fictícios no banco de dados
        Responsible::factory()->count(1)->create();

        // Arrange: Criando tarefas fictícias no banco de dados
        $taskid = (Task::factory()->create())->id;


        // Act: Criando uma instância do serviço e chamando o método
        $service = new GetDetailTaskService();
        $tasks = $service->getDetail($taskid);

        //Assert: verificando se $tasks tem a classe $task
        $this->assertInstanceOf(Task::class, $tasks);
        $this->assertNotEmpty($tasks);
    }
}
