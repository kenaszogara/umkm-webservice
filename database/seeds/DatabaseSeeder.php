<?php

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
        $this->call(CustomerTableSeeder::class);
        $this->call(BankTableSeeder::class);
        $this->call(MerchantTableSeeder::class);
        $this->call(ProductCategoryTableSeeder::class);
    }
}
