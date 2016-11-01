<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeInvoiceRowsTaxesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'invoice_rows_taxes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('tax_id')->unsigned()->default(0)->index('tax_id');
			$table->integer('invoice_row_id')->unsigned()->default(0)->index('invoice_row_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'invoice_rows_taxes');
	}

}
