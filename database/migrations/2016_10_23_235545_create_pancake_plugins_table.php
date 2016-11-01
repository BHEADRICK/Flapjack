<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakePluginsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'plugins', function(Blueprint $table)
		{
			$table->string('slug', 100)->primary();
			$table->text('value', 65535)->nullable();
			$table->string('version', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'plugins');
	}

}
