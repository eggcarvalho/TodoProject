<?php

namespace Tests\Unit\Http\Services\Responsible;

use App\Models\Responsible;
use App\Services\Responsibles\GetListResponsibleService;
use Tests\TestCase;

class GetListResponsibleServiceTest extends TestCase
{
    public function testGetListResponsible()
    {
        //Arrange: cria 4 responsabilidades
        Responsible::factory()->count(4)->create();

        //Act: cria um novo service e chama o método
        $service = new GetListResponsibleService();

        //Assert: verifica se o método getResponsibles retorna as responsabilidades
        $this->assertEquals(Responsible::all()->count(), $service->getResponsibles()->count());
    }

    public function testCheckIfResponsiblesIsNotEmpty()
    {
        //Arrange: cria 4 responsabilidades
        Responsible::factory()->count(4)->create();

        //Act: cria um novo service e chama o método
        $service = new GetListResponsibleService();

        //Assert: verifica se o método getResponsibles retorna alguma responsabilidade
        $this->assertNotEmpty($service->getResponsibles());
    }
}
