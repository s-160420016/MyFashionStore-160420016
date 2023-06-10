<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Bayi',
        ]);

        DB::table('categories')->insert([
            'name' => 'Anak-anak',
        ]);

        DB::table('categories')->insert([
            'name' => 'Remaja',
        ]);

        DB::table('categories')->insert([
            'name' => 'Dewasa',
        ]);
    }
}
