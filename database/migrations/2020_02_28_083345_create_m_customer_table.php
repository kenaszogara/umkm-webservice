<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMCustomerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('m_customer', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 30);
			$table->integer('phone_number');
			$table->string('email', 30);
			$table->string('address', 50);
			$table->string('gender', 14);
			$table->date('birth_date');
			$table->string('profile', 100);
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
		Schema::drop('m_customer');
	}

}
