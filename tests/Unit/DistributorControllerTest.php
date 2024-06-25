<?php

namespace Tests\Unit\Http\Controllers;

use App\Http\Controllers\DistributorController;
use App\Models\Distributor;
use Illuminate\View\View;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class DistributorControllerTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;

    public function testShowMethod()
    {
        // Maak een mock van het Distributor model
        $mockDistributor = $this->createMock(Distributor::class);
        $mockDistributor->method('distributorWithProducts')->willReturn(new \stdClass());

        // Vervang de Distributor instance in de service container
        $this->app->instance(Distributor::class, $mockDistributor);

        // Maak een instance van de DistributorController
        $controller = new DistributorController();

        // Roep de show methode aan
        $response = $controller->show(1); 

        // Verifieer dat de response een view is
        $this->assertInstanceOf(View::class, $response);

        // Verifieer dat de view de juiste data bevat
        $viewData = $response->getData();
        $this->assertArrayHasKey('distributorWithProducts', $viewData);
    }
}
