<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeActionLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'action_logs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('timestamp');
			$table->integer('user_id');
			$table->string('action');
			$table->text('message', 65535);
			$table->integer('item_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'action_logs');
	}

}
