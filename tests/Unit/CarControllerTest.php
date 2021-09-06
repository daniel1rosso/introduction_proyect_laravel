<?php

namespace Tests\Feature;

use App\Http\Controllers\CarController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Mockery;
use Tests\TestCase;

class CarControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $repo = Mockery::mock('App\Repositories\CarRepository');
        
        $controllers = new CarController($repo);
        
        $controllers->index();

        //$repo->shouldRecive('getPaginated')->one();

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
