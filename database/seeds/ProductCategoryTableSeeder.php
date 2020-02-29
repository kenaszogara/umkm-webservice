<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Factory $factory)
    {
        $faker = $factory->create();

        DB::table('product_categories')->insert([
            [
                'uuid' => $faker->uuid,
                'code' => 10,
                'name' => 'BUKU',
            ],
            [
                'uuid' => $faker->uuid,
                'code' => 12,
                'name' => 'ATK',
            ],
            [
                'uuid' => $faker->uuid,
                'code' => 13,
                'name' => 'MAINAN',
            ],
            [
                'uuid' => $faker->uuid,
                'code' => 14,
                'name' => 'CELANA',
            ],
            [
                'uuid' => $faker->uuid,
                'code' => 15,
                'name' => 'BAJU',
            ],
        ]);
    }
}
