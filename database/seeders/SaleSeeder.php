<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $factory = \App\Models\Sale::factory()->create([
            'sale_id' => "test_sale",
            'created_at' => $now,
            'updated_at' => $now
        ]);
    }
}
