<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeAssignmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'assignments', function(Blueprint $table)
		{
			$table->integer('user_id')->index('user_id');
			$table->integer('item_id')->index('item_id');
			$table->string('item_type')->default('')->index('item_type');
			$table->integer('can_read')->default(0);
			$table->integer('can_update')->default(0);
			$table->integer('can_delete')->default(0);
			$table->integer('can_generate_from_project')->default(0);
			$table->integer('can_send')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'assignments');
	}

}
