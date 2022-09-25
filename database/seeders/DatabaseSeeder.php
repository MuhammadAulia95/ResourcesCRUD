<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Product::create([
            'name' => 'Macbook Pro 2021',
            'description' => 'Display Retina',
            'price' => '15000000'
        ]);

        Product::create([
            'name' => 'Noir N1',
            'description' => 'yellow keycard specimen zero',
            'price' => '950000'
        ]);

        Product::create([
            'name' => 'Razer Mouse',
            'description' => '15000 DPH',
            'price' => '659900'
        ]);

        Product::create([
            'name' => 'Monitor LG29MP400',
            'description' => '155 Hzz',
            'price' => '1200000'
        ]);

        Product::create([
            'name' => 'SSD internal 1TB',
            'description' => '100 mbps',
            'price' => '540000'
        ]);
    }
}
