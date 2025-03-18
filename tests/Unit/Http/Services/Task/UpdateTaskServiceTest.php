<?php

namespace Tests\Unit\Http\Services\Task;

use Tests\TestCase;
use App\Models\Task;
use App\Models\Responsible;
use App\Services\Task\UpdateTaskService;

class UpdateTaskServiceTest extends TestCase
{


    public function test_update_task()
    {

        // Arrange: Criando responsáveis fictícios no banco de dados
        Responsible::factory()->count(1)->create();

        // Arrange: Criando tarefas fictícias no banco de dados
        $taskid = Task::factory()->create();

        $title = uniqid();
        $description = uniqid();

        $updateData = [
            'title' => $title,
            'description' => $description
        ];


        // Act: Criando uma instância do serviço e chamando o método
        $service = (new UpdateTaskService($updateData, $taskid->id));


        //Assert: verifica se a ação de atualizar foi concluida
        $this->assertDatabaseHas('tasks', [
            'title' => $title,
            'description' => $description
        ]);
    }
}
