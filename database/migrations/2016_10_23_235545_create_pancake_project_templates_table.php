<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeProjectTemplatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'project_templates', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('client_id', 10)->nullable();
			$table->string('name');
			$table->text('description', 65535)->nullable();
			$table->decimal('rate', 10)->nullable();
			$table->integer('currency_id')->nullable();
			$table->float('exchange_rate', 10, 5);
			$table->boolean('is_viewable');
			$table->boolean('is_flat_rate')->default(0);
			$table->float('projected_hours', 10, 0)->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'project_templates');
	}

}
