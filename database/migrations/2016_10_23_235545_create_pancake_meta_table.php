<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeMetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'meta', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('first_name', 50)->nullable()->default('');
			$table->string('last_name', 50)->nullable()->default('');
			$table->string('company', 100)->nullable()->default('');
			$table->string('phone', 20)->nullable()->default('');
			$table->string('custom_background')->nullable();
			$table->string('last_visited_version', 48)->nullable()->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'meta');
	}

}
