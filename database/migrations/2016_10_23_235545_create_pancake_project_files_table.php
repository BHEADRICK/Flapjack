<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeProjectFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'project_files', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('comment_id')->unsigned()->index('comment_id');
			$table->integer('created')->unsigned();
			$table->string('orig_filename');
			$table->text('real_filename', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'project_files');
	}

}
