<?php

use Illuminate\Database\Seeder;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            [
                'name' => 'BUKU',
            ],
            [
                'name' => 'ATK',
            ],
            [
                'name' => 'MAINAN',
            ],
            [
                'name' => 'CELANA',
            ],
            [
                'name' => 'BAJU',
            ],
        ]);
    }
}
