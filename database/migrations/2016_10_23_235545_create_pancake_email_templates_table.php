<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeEmailTemplatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'email_templates', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('type');
			$table->string('name');
			$table->string('subject');
			$table->text('content', 65535);
			$table->boolean('days')->nullable();
			$table->integer('created');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'email_templates');
	}

}
