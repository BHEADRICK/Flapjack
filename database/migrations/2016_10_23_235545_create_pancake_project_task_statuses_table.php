<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeProjectTaskStatusesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'project_task_statuses', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title');
			$table->string('background_color', 50);
			$table->string('font_color', 50);
			$table->string('text_shadow')->default('');
			$table->string('box_shadow')->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'project_task_statuses');
	}

}
