<?php

namespace Tests\Unit\Http\Services\Task;

use Tests\TestCase;
use App\Models\Task;
use App\Models\Responsible;
use App\Services\Task\UpdateTaskService;
use App\Services\Task\UpdateStatusTaskService;

class UpdateStatusTaskServiceTest extends TestCase
{


    public function test_update_status_done_task()
    {

        // Arrange: Criando responsáveis fictícios no banco de dados
        Responsible::factory()->count(1)->create();

        // Arrange: Criando tarefas fictícias no banco de dados
        $taskid = Task::factory()->create(['status' => 'in-progress'])->id;

        //Act: Atualiza de in-progress para done
        (new UpdateStatusTaskService($taskid));

        //Assert: verifica se a ação de atualizar foi concluida
        $this->assertDatabaseHas('tasks', [
            'id' => $taskid,
            'status' => 'done'
        ]);
    }

    public function test_update_status_in_progress_task()
    {

        // Arrange: Criando responsáveis fictícios no banco de dados
        Responsible::factory()->count(1)->create();

        // Arrange: Criando tarefas fictícias no banco de dados
        $taskid = Task::factory()->create(['status' => 'done'])->id;

        //Act: Atualiza de in-progress para done
        (new UpdateStatusTaskService($taskid));

        //Assert: verifica se a ação de atualizar foi concluida
        $this->assertDatabaseHas('tasks', [
            'id' => $taskid,
            'status' => 'in-progress'
        ]);
    }
}
