<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMMerchantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('m_merchant', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('merchant_name', 30);
			$table->integer('merchant_phone');
			$table->string('merchant_email', 30);
			$table->string('merchant_address', 50);
			$table->string('merchant_bank', 50);
			$table->integer('merchant_desc');
			$table->integer('merchant_user');
			$table->string('merchant_profile', 100);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('m_merchant');
	}

}
