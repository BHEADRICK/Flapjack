<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeCiSessionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'ci_sessions', function(Blueprint $table)
		{
			$table->string('session_id', 40)->default('0')->primary();
			$table->string('ip_address', 45)->default('0');
			$table->string('user_agent', 120);
			$table->integer('last_activity')->unsigned()->default(0)->index('last_activity_idx');
			$table->text('user_data', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'ci_sessions');
	}

}
