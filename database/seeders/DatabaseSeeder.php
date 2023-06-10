<?php

namespace Database\Seeders;

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
        $this->call(CategorySeeder::class);
        $this->call(SupplierSeeder::class);

        // Seed category and supplier table first, then migrate add supplierid column. Finally run this seeder.
        $this->call(ProductSeeder::class);
    }
}
