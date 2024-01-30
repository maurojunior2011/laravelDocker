<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $total_product = rand(5, 10);
        $total_sales = rand(5, 10);

        // PRODUCTS

        for($i=1; $i<=$total_product; $i++) {
            \App\Models\Product::factory()->create([
                'name' => fake()->numerify('Celular ####'),
                'price' => fake()->randomFloat(2, 1800, 2000),
                'description' => fake()->text(30)
            ]);
        }

        // SALES

        $now = Carbon::now();

        for($i=1; $i<=$total_sales; $i++) {

            $saleId = $now->format('dmYHmisu');

            $factory = \App\Models\Sale::factory()->create([
                'sale_id' => $saleId,
                'created_at' => $now,
                'updated_at' => $now
            ]);

            $existProduct = false;

            for($j=1; $j<=$total_product; $j++) {

                if((bool)rand(0,1)) {
                    \App\Models\ProductSale::factory()->create([
                        'product_id' => $j,
                        'sale_id' => $saleId,
                        'created_at' => $now,
                        'updated_at' => $now
                    ]);
                    $existProduct = true;
                }
            }

            if(!$existProduct) {
                \App\Models\ProductSale::factory()->create([
                    'product_id' => 1,
                    'sale_id' => $saleId,
                    'created_at' => $now,
                    'updated_at' => $now
                ]);
            }
                
            $now = $now->subHours(1);

        }
    }
}
