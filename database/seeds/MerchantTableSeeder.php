<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
use Carbon\Carbon;

class MerchantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Factory $factory)
    {
        $faker = $factory->create();
        
        DB::table('merchants')->insert([
            [
                'uuid' => $faker->uuid,
                'name' => 'Merchant A',
                'phone' => '1234567890',
                'email' => 'merchant@email.com',
                'address' => 'jalan merchant',
                'bank_code' => 10,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'uuid' => $faker->uuid,
                'name' => 'Merchant B',
                'phone' => '1234567890',
                'email' => 'merchant@email.com',
                'address' => 'jalan merchant',
                'bank_code' => 13,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'uuid' => $faker->uuid,
                'name' => 'Merchant C',
                'phone' => '1234567890',
                'email' => 'merchant@email.com',
                'address' => 'jalan merchant',
                'bank_code' => 12,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
