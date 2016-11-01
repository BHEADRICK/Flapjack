<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeClientTicketSupportRateMatrixTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'client_ticket_support_rate_matrix', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('client_id');
			$table->integer('priority_id');
			$table->float('rate', 10);
			$table->integer('tax_id')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'client_ticket_support_rate_matrix');
	}

}
