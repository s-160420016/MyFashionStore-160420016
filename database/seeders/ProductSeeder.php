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
            'name' => "Baju Kuning Telur Asin Versasa",
            'price' => rand(10000, 50000),
            'category_id' => 1,
            'stock' => rand(1, 100),
            'production_price' => rand(7000, 30000),
            'supplier_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => "T-Shirt Hijau Telur Bebek Pelatih",
            'price' => rand(10000, 50000),
            'category_id' => 1,
            'stock' => rand(1, 100),
            'production_price' => rand(7000, 30000),
            'supplier_id' => 2,
        ]);

        DB::table('products')->insert([
            'name' => "Sepatu Biru Guppi",
            'price' => rand(10000, 50000),
            'category_id' => 1,
            'stock' => rand(1, 100),
            'production_price' => rand(7000, 30000),
            'supplier_id' => 3,
        ]);

        DB::table('products')->insert([
            'name' => "Baju Biru Juara Panjang",
            'price' => rand(10000, 50000),
            'category_id' => 2,
            'stock' => rand(1, 100),
            'production_price' => rand(7000, 30000),
            'supplier_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => "T-Shirt Merah Guppi",
            'price' => rand(10000, 50000),
            'category_id' => 2,
            'stock' => rand(1, 100),
            'production_price' => rand(7000, 30000),
            'supplier_id' => 2,
        ]);

        DB::table('products')->insert([
            'name' => "Celana Panjang Suprama",
            'price' => rand(10000, 50000),
            'category_id' => 2,
            'stock' => rand(1, 100),
            'production_price' => rand(7000, 30000),
            'supplier_id' => 3,
        ]);

        DB::table('products')->insert([
            'name' => "Shirt Abu-abu Abibas",
            'price' => rand(10000, 50000),
            'category_id' => 3,
            'stock' => rand(1, 100),
            'production_price' => rand(7000, 30000),
            'supplier_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => "Sepatu Naik",
            'price' => rand(10000, 50000),
            'category_id' => 3,
            'stock' => rand(1, 100),
            'production_price' => rand(7000, 30000),
            'supplier_id' => 2,
        ]);

        DB::table('products')->insert([
            'name' => "Sepatu Macan",
            'price' => rand(10000, 50000),
            'category_id' => 3,
            'stock' => rand(1, 100),
            'production_price' => rand(7000, 30000),
            'supplier_id' => 3,
        ]);

        DB::table('products')->insert([
            'name' => "Shirt Abu-abu Keseimbangan Baru",
            'price' => rand(10000, 50000),
            'category_id' => 4,
            'stock' => rand(1, 100),
            'production_price' => rand(7000, 30000),
            'supplier_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => "Sepatu Convert",
            'price' => rand(10000, 50000),
            'category_id' => 4,
            'stock' => rand(1, 100),
            'production_price' => rand(7000, 30000),
            'supplier_id' => 2,
        ]);

        DB::table('products')->insert([
            'name' => "Baju Abu-abu Sungai Buaya",
            'price' => rand(10000, 50000),
            'category_id' => 4,
            'stock' => rand(1, 100),
            'production_price' => rand(7000, 30000),
            'supplier_id' => 3,
        ]);
    }
}
