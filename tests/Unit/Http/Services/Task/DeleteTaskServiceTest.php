<?php

namespace Tests\Unit\Http\Services\Task;

use Tests\TestCase;
use App\Models\Task;
use App\Models\Responsible;
use App\Services\Task\DeleteTaskService;


class DeleteTaskServiceTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_delete_task(): void
    {
        //Arrange: Registrando uma tarefa para exclui-la
        Responsible::factory(5)->create();

        $mockData = [
            'title' => 'Test Delete Task',
            'description' => 'Test Description',
            'responsible_id' => Responsible::inRandomOrder()->first()->id,
            'deadline' => now(),
            'ia_manager' => false
        ];


        $taskid = Task::create($mockData)->id;

        //Act: Excluindo a tarefa
        (new DeleteTaskService($taskid));

        //Assert: Verificando se a tarefa foi excluída
        $this->assertEmpty(Task::find($taskid));
    }
}
