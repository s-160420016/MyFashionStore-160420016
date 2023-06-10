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
            'name' => 'Kecantikan',
        ]);

        DB::table('categories')->insert([
            'name' => 'Alat Rumah Tangga',
        ]);

        DB::table('categories')->insert([
            'name' => 'Bahan Mentah',
        ]);

        DB::table('categories')->insert([
            'name' => 'Bumbu Dapur',
        ]);

        DB::table('categories')->insert([
            'name' => 'Permainan',
        ]);
    }
}
