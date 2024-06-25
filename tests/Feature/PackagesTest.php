<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mockery;
use App\Models\ProductsPerPackage;
use App\Http\Controllers\PackagesController;

class PackagesTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test the show method.
     *
     * @return void
     */
    public function testShow()
    {
        // Mock the ProductsPerPackage model
        $mock = Mockery::mock('alias:App\Models\ProductsPerPackage');
        $mock->shouldReceive('join')
            ->once()
            ->with('packages', 'products_per_package.package_id', '=', 'packages.id')
            ->andReturnSelf();
        $mock->shouldReceive('join')
            ->once()
            ->with('products', 'products_per_package.product_id', '=', 'products.id')
            ->andReturnSelf();
        $mock->shouldReceive('select')
            ->once()
            ->with('packages.*', 'products.name as product_name')
            ->andReturnSelf();
        $mock->shouldReceive('orderBy')
            ->once()
            ->with('packages.id')
            ->andReturnSelf();
        $mock->shouldReceive('get')
            ->once()
            ->andReturn(collect([
                (object)[
                    'id' => 1,
                    'name' => 'Package 1',
                    'product_name' => 'Product 1'
                ],
                (object)[
                    'id' => 2,
                    'name' => 'Package 2',
                    'product_name' => 'Product 2'
                ]
            ]));

        // Call the controller method
        $controller = new PackagesController();
        $response = $controller->show();

        // Assert the view name and data
        $this->assertEquals('packages.show', $response->getName());
        $this->assertArrayHasKey('packages', $response->getData());
        $this->assertCount(2, $response->getData()['packages']);
    }
}
