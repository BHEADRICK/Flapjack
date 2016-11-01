<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeAssignmentsPermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'assignments_permissions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('client_id');
			$table->string('item_type')->default('');
			$table->integer('item_id');
			$table->boolean('can_all');
			$table->boolean('can_create');
			$table->boolean('can_read');
			$table->boolean('can_update');
			$table->boolean('can_delete');
			$table->boolean('can_generate_from_project');
			$table->boolean('can_send');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'assignments_permissions');
	}

}
