<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeProjectMilestonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'project_milestones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('description', 65535)->nullable();
			$table->integer('project_id')->unsigned();
			$table->integer('assigned_user_id')->unsigned()->nullable();
			$table->string('color', 50);
			$table->integer('target_date')->unsigned()->nullable();
			$table->boolean('is_viewable');
			$table->integer('order')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'project_milestones');
	}

}
