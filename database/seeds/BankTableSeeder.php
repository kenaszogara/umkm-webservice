<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class BankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Factory $factory)
    {
        $faker = $factory->create();

        DB::table('merchant_bank')->insert([
            [
                'uuid' => $faker->uuid,
                'code' => 10,
                'name' => 'BCA',
            ],
            [
                'uuid' => $faker->uuid,
                'code' => 11,
                'name' => 'MANDIRI',
            ],
            [
                'uuid' => $faker->uuid,
                'code' => 12,
                'name' => 'BNI',
            ],
            [
                'uuid' => $faker->uuid,
                'code' => 13,
                'name' => 'BRI',
            ],
            [
                'uuid' => $faker->uuid,
                'code' => 14,
                'name' => 'NIAGA',
            ],
            [
                'uuid' => $faker->uuid,
                'code' => 15,
                'name' => 'HSBC',
            ],
        ]);
    }
}
