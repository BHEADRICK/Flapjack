<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeKeysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'keys', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('key', 40);
			$table->integer('level');
			$table->string('note')->nullable();
			$table->integer('date_created');
			$table->boolean('is_private_key')->default(0);
			$table->text('ip_addresses', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'keys');
	}

}
