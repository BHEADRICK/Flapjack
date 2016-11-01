<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeNotificationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'notifications', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('context');
			$table->integer('context_id');
			$table->text('message', 65535);
			$table->boolean('seen')->default(0);
			$table->integer('created');
			$table->string('action')->nullable();
			$table->integer('user_id')->nullable();
			$table->integer('client_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'notifications');
	}

}
