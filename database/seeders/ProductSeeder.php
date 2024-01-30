<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Product::factory()->create([
            'name' => fake()->numerify('Celular ####'),
            'price' => fake()->randomFloat(2, 1800, 2000),
            'description' => fake()->text(30)
        ]);

        \App\Models\Product::factory()->create([
            'name' => fake()->numerify('Celular ####'),
            'price' => fake()->randomFloat(2, 1800, 2000),
            'description' => fake()->text(30)
        ]);

        \App\Models\Product::factory()->create([
            'name' => fake()->numerify('Celular ####'),
            'price' => fake()->randomFloat(2, 1800, 2000),
            'description' => fake()->text(30)
        ]);
    }
}
