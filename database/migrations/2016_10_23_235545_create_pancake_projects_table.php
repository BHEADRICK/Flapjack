<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('client_id')->index('client_id');
			$table->string('name');
			$table->integer('due_date');
			$table->text('description', 65535);
			$table->integer('date_entered');
			$table->dateTime('date_updated')->nullable();
			$table->decimal('rate', 10)->default(0.00);
			$table->boolean('completed');
			$table->integer('currency_id');
			$table->float('exchange_rate', 10, 5)->default(1.00000);
			$table->string('unique_id', 10)->default('');
			$table->boolean('is_viewable');
			$table->float('projected_hours', 10, 0);
			$table->boolean('is_archived')->default(0);
			$table->integer('owner_id')->default(0);
			$table->boolean('is_flat_rate')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'projects');
	}

}
