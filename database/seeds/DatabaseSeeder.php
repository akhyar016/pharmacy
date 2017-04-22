<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(usersTableSeeder::class);
        $this->call(companiesTableSeeder::class);
        $this->call(suppliersTableSeeder::class);
        $this->call(categoriesTableSeeder::class);
        $this->call(medicineTableSeeder::class);
    }
}
