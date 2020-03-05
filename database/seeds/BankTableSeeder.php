<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('merchant_bank')->insert([
            [
                'name' => 'BCA',
            ],
            [
                'name' => 'MANDIRI',
            ],
            [
                'name' => 'BNI',
            ],
            [
                'name' => 'BRI',
            ],
            [
                'name' => 'NIAGA',
            ],
            [
                'name' => 'HSBC',
            ],
        ]);
    }
}
