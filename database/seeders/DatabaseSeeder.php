<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inventory;

class InventorySeeder extends Seeder
{
    public function run()
    {
        Inventory::create([
            'name' => 'Product 1',
            'quantity' => 10,
            'price' => 15.99,
        ]);

        Inventory::create([
            'name' => 'Product 2',
            'quantity' => 20,
            'price' => 25.50,
        ]);

        Inventory::create([
            'name' => 'Product 3',
            'quantity' => 30,
            'price' => 10.00,
        ]);
    }
}
