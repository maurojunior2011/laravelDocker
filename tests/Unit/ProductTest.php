<?php

namespace Tests\Unit;

use Database\Seeders\ProductSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     */
    public function test_orders_can_be_created(): void
    {
        $this->seed(ProductSeeder::class);

        $this->assertDatabaseCount('products', 3);
    }
}
