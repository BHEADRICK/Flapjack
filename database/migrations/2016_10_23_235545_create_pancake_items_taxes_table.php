<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeItemsTaxesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'items_taxes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('tax_id')->unsigned()->default(0)->index('tax_id');
			$table->integer('item_id')->unsigned()->default(0)->index('item_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'items_taxes');
	}

}
