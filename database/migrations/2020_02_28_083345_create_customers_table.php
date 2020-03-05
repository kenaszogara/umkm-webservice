<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table)
		{
			$table->uuid('uuid')->primary();
			$table->string('name', 30);
			$table->string('phone_number');
			$table->string('password');
			$table->string('email', 30);
			$table->string('address', 50);
			$table->string('gender', 14);
			$table->date('birth_date');
			$table->string('profile', 100);
			$table->rememberToken();
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
		Schema::dropIfExists('customers');
	}

}
