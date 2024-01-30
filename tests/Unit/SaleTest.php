<?php

namespace Tests\Unit;

use Database\Seeders\SaleSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SaleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     */
    public function test_orders_can_be_created(): void
    {
        $this->seed(SaleSeeder::class);

        $this->assertDatabaseCount('sales', 1);
    }
}
