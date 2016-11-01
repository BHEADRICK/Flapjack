<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'comments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('client_id')->unsigned()->index('client_id');
			$table->integer('user_id')->unsigned()->nullable()->index('user_id');
			$table->string('user_name');
			$table->integer('created')->unsigned();
			$table->string('item_type')->index('item_type');
			$table->integer('item_id')->nullable()->index('item_id');
			$table->text('comment', 65535);
			$table->boolean('is_private')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'comments');
	}

}
