<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Coffee',
            'price' => 85.00,
            'stock_quantity' => 50,
            'image' => null,
        ]);

        Product::create([
            'name' => 'Iced Tea',
            'price' => 60.00,
            'stock_quantity' => 40,
            'image' => null,
        ]);

        Product::create([
            'name' => 'Burger',
            'price' => 150.00,
            'stock_quantity' => 25,
            'image' => null,
        ]);
    }
}