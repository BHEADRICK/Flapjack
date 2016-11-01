<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('group_id')->unsigned();
			$table->char('ip_address', 16);
			$table->string('username', 200);
			$table->string('password', 40);
			$table->string('salt', 40)->nullable()->default('');
			$table->string('email', 40);
			$table->string('activation_code', 40)->nullable()->default('');
			$table->string('forgotten_password_code', 40)->nullable()->default('');
			$table->string('remember_code', 40)->nullable()->default('');
			$table->integer('created_on')->unsigned();
			$table->integer('last_login')->unsigned()->nullable();
			$table->boolean('active')->nullable()->default(1);
			$table->timestamp('date_updated')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('last_activity')->nullable();


		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'users');
	}

}
