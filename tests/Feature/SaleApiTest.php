<?php

namespace Tests\Feature;

use Database\Seeders\SaleSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SaleApiTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response_all(): void
    {
        $this->seed(SaleSeeder::class);

        $response = $this->get('/api/v1/allsales');

        $response->assertStatus(200);

        $this->assertTrue($response['success']);
    }

    public function test_the_application_returns_a_successful_response_single(): void
    {
        $this->seed(SaleSeeder::class);

        $response = $this->get('/api/v1/sale/test_sale');

        $response->assertStatus(200);

        $this->assertTrue($response['success']);
    }
}
