<?php

namespace Tests\Unit\Services\Task;

use Mockery;
use Tests\TestCase;
use App\Models\Task;
use App\Models\Responsible;
use Illuminate\Support\Facades\Queue;
use App\Services\Task\RegisterTaskService;
use Database\Seeders\ResponsibleSeeder;

class RegisterTaskServiceTest extends TestCase
{
    public function test_generate_task_object_without_ia()
    {
        Queue::fake();

        $responsible = Responsible::factory()->create();

        $mockData = [
            'responsible_id' => $responsible->id,
            'title' => 'Test Task',
            'description' => 'Test Description',
            'decideIA' => 'false',
            'deadline' => now()
        ];


        $result = (new RegisterTaskService($mockData))->generateTaskObject();




        $this->assertEquals($responsible->id, $result->responsible_id);
        $this->assertEquals('Test Task', $result->title);
        $this->assertEquals('Test Description', $result->description);
    }


    public function test_generate_task_object_with_ia()
    {

        $title = 'Test Task with IA ' . uniqid();

        $description = 'Test Description with IA' . uniqid();
        (new ResponsibleSeeder())->run();


        $mockData = [
            'title' => $title,
            'description' => $description,
            'decideIA' => 'true',
        ];


        $result = (new RegisterTaskService($mockData))->generateTaskObject();


        $this->assertEquals($title, $result->title);
        $this->assertEquals($description, $result->description);
        $this->assertNotEmpty($result->toArray()['responsible_id']);
        $this->assertNotEmpty($result->toArray()['ia_path']);
        $this->assertNotEmpty($result->toArray()['deadline']);
    }
}
