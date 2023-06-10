<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            'name' => "PT Belum Pernah Pacaran",
            'address' => "Jalan-in aja dulu siapa tau cocok",
        ]);

        DB::table('suppliers')->insert([
            'name' => "PT Belum Pernah Pacaran Sering Kandas",
            'address' => "Jalan terus jadian enggak",
        ]);

        DB::table('suppliers')->insert([
            'name' => "PT Nggak Tahu Namanya Apa",
            'address' => "Nggak punya rumah sih, jadi bingung nulis apa",
        ]);
    }
}
