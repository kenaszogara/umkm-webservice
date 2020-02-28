<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMBankMerchantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('m_bank_merchant', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('kode_bank');
			$table->string('nama_bank', 14);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('m_bank_merchant');
	}

}
