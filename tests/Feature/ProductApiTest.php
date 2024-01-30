<?php

namespace Tests\Feature;

use Database\Seeders\ProductSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductApiTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $this->seed(ProductSeeder::class);

        $response = $this->get('/api/v1/allproducts');

        $response->assertStatus(200);

        $this->assertTrue($response['success']);
    }
}
