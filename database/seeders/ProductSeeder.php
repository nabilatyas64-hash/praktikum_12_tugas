<?php

namespace Database\Seeders;

use App\Models\Product; // Don't forget to import your Model!
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataProducts = [
            [
                'name'  => 'Product A',
                'price' => 100000,
                'stock' => 50,
                'sku'   => 'PROD-A-001',
            ],
            [
                'name'  => 'Product B',
                'price' => 150000,
                'stock' => 30,
                'sku'   => 'PROD-B-001',
            ],
            [
                'name'  => 'Product C',
                'price' => 20000,
                'stock' => 20,
                'sku'   => 'PROD-C-001',
            ],
            [
                'name'  => 'Product D',
                'price' => 250000,
                'stock' => 10,
                'sku'   => 'PROD-D-001',
            ], 
            [
                'name'  => 'Product E',
                'price' => 300000,
                'stock' => 5,
                'sku'   => 'PROD-E-001', 
            ],
        ]; 

        
        foreach ($dataProducts as $product) {
            Product::create($product);
        }
    }
}