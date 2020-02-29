<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePendingMerchantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pending_merchants', function(Blueprint $table)
		{
			$table->uuid('uuid', true);
			$table->string('name', 30);
			$table->integer('phone');
			$table->string('email', 30);
			$table->string('address', 50);
			$table->string('bank_code', 50);
			$table->integer('user');
			$table->integer('description')->nullable();
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
		Schema::dropIfExists('pending_merchants');
	}

}
