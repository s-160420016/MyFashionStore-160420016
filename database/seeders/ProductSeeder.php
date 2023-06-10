<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => "Abcdefg",
            'price' => rand(10000, 50000),
            'category_id' => 1,
            'stock' => rand(1, 100),
            'production_price' => rand(7000, 30000),
        ]);

        DB::table('products')->insert([
            'name' => "Abcdefg",
            'price' => rand(10000, 50000),
            'category_id' => 1,
            'stock' => rand(1, 100),
            'production_price' => rand(7000, 30000),
        ]);

        DB::table('products')->insert([
            'name' => "Abcdefg",
            'price' => rand(10000, 50000),
            'category_id' => 1,
            'stock' => rand(1, 100),
            'production_price' => rand(7000, 30000),
        ]);

        DB::table('products')->insert([
            'name' => "Abcdefg",
            'price' => rand(10000, 50000),
            'category_id' => 2,
            'stock' => rand(1, 100),
            'production_price' => rand(7000, 30000),
        ]);

        DB::table('products')->insert([
            'name' => "Abcdefg",
            'price' => rand(10000, 50000),
            'category_id' => 2,
            'stock' => rand(1, 100),
            'production_price' => rand(7000, 30000),
        ]);

        DB::table('products')->insert([
            'name' => "Abcdefg",
            'price' => rand(10000, 50000),
            'category_id' => 2,
            'stock' => rand(1, 100),
            'production_price' => rand(7000, 30000),
        ]);

        DB::table('products')->insert([
            'name' => "Abcdefg",
            'price' => rand(10000, 50000),
            'category_id' => 3,
            'stock' => rand(1, 100),
            'production_price' => rand(7000, 30000),
        ]);

        DB::table('products')->insert([
            'name' => "Abcdefg",
            'price' => rand(10000, 50000),
            'category_id' => 3,
            'stock' => rand(1, 100),
            'production_price' => rand(7000, 30000),
        ]);

        DB::table('products')->insert([
            'name' => "Abcdefg",
            'price' => rand(10000, 50000),
            'category_id' => 3,
            'stock' => rand(1, 100),
            'production_price' => rand(7000, 30000),
        ]);
    }
}
