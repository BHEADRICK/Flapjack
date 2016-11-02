<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeClientsCreditAlterationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'clients_credit_alterations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('client_id');
			$table->decimal('amount', 65, 10);

		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'clients_credit_alterations');
	}

}
