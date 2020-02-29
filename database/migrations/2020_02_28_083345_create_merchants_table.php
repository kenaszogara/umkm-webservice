<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMerchantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('merchants', function(Blueprint $table)
		{
			$table->uuid('uuid')->primary();
			$table->string('name', 30);
			$table->integer('phone');
			$table->string('email', 30);
			$table->string('address', 50);
			$table->integer('bank_code');
			$table->string('description')->nullable();
			$table->string('profile', 100)->nullable();
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
		Schema::dropIfExists('merchants');
	}

}
