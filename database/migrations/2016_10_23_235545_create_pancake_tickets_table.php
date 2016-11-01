<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeTicketsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'tickets', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('client_id')->unsigned();
			$table->integer('assigned_user_id')->unsigned()->nullable();
			$table->integer('status_id')->unsigned();
			$table->integer('priority_id')->unsigned();
			$table->string('subject')->default('');
			$table->boolean('resolved');
			$table->integer('created')->unsigned();
			$table->integer('owner_id')->default(0);
			$table->boolean('is_billable')->default(0);
			$table->boolean('is_paid')->default(0);
			$table->integer('invoice_id')->default(0);
			$table->boolean('is_archived')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'tickets');
	}

}
