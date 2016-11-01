<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeCurrenciesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'currencies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 200)->nullable()->default('');
			$table->string('code', 3)->index('code');
			$table->float('rate', 10, 0)->nullable()->default(0);
			$table->string('format', 190)->default('{"symbol":"before","decimal":".","thousand":",","decimals":2}');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'currencies');
	}

}
