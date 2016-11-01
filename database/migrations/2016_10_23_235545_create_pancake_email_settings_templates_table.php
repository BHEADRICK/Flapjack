<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeEmailSettingsTemplatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'email_settings_templates', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('identifier');
			$table->string('subject');
			$table->text('message', 65535);
			$table->string('type');
			$table->string('template')->default('default');
			$table->timestamp('date_added')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('date_updated');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'email_settings_templates');
	}

}
