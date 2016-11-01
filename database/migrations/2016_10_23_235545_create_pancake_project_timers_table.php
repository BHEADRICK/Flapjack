<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeProjectTimersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'project_timers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('start_timestamp');
			$table->integer('last_modified_timestamp');
			$table->integer('current_seconds');
			$table->integer('task_id')->unsigned()->index('task_id');
			$table->integer('user_id')->default(0);
			$table->text('pauses_json')->nullable();
			$table->boolean('is_paused')->default(0);
			$table->boolean('is_over')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'project_timers');
	}

}
