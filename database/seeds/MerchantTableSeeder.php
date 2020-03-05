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
                'phone_number' => '1234567890',
                'email' => 'merchant@email.com',
                'address' => 'jalan merchant',
                'bank_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'uuid' => $faker->uuid,
                'name' => 'Merchant B',
                'phone_number' => '1234567890',
                'email' => 'merchant@email.com',
                'address' => 'jalan merchant',
                'bank_id' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'uuid' => $faker->uuid,
                'name' => 'Merchant C',
                'phone_number' => '1234567890',
                'email' => 'merchant@email.com',
                'address' => 'jalan merchant',
                'bank_id' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
