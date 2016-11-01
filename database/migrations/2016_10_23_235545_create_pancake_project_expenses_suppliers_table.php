<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeProjectExpensesSuppliersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'project_expenses_suppliers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->default('');
			$table->text('description', 65535)->nullable();
			$table->text('notes', 65535)->nullable();
			$table->boolean('deleted')->default(0);
			$table->string('status', 128)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'project_expenses_suppliers');
	}

}
