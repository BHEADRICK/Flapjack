<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeClientsTaxesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'clients_taxes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('client_id');
			$table->integer('tax_id')->unsigned();
			$table->string('tax_registration_id', 1024)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'clients_taxes');
	}

}
