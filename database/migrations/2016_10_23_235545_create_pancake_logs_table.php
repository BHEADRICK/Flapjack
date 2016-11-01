<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'logs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('uri');
			$table->string('method', 6);
			$table->text('params', 65535)->nullable();
			$table->string('api_key', 40);
			$table->string('ip_address', 45);
			$table->integer('time');
			$table->boolean('authorized')->default(0);
			$table->float('rtime', 10, 0)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'logs');
	}

}
