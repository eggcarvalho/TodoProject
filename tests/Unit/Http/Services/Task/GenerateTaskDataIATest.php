<?php

namespace Tests\Unit\Task;

use Tests\TestCase;
use App\Models\Responsible;
use App\Services\Task\GenerateTaskDataIA;

class GenerateTaskDataIATest extends TestCase
{
    public function test_check_response_ia()
    {

        //Arrange: Mock data para envio a IA
        Responsible::factory(5)->create();

        $mockData = [
            'title' => 'Test Task',
            'description' => 'Test task description'
        ];


        //Act: Trazer resposta da IA com todos os campos corretos
        $result = (new GenerateTaskDataIA())->generateDataIA($mockData);


        //Assert: Verificando se os dados retornados são válidos
        $this->assertNotNull($result['status']);
        $this->assertNotNull($result['deadline']);
        $this->assertNotNull($result['priority']);
        $this->assertNotNull($result['ia_manager']);
        $this->assertNotNull($result['ia_path']);
        $this->assertArrayHasKey('title', $result);
        $this->assertArrayHasKey('description', $result);
        $this->assertArrayHasKey('responsible_id', $result);
        $this->assertArrayHasKey('deadline', $result);
        $this->assertArrayHasKey('priority', $result);
        $this->assertArrayHasKey('ia_manager', $result);
        $this->assertArrayHasKey('ia_path', $result);
        $this->assertEquals('Test Task', $result['title']);
        $this->assertEquals('Test task description', $result['description']);
        $this->assertGreaterThan(0, $result['priority']);
        $this->assertTrue($result['ia_manager']);
    }
}
