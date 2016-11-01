<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeErrorLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'error_logs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('subject', 1024)->default('');
			$table->integer('occurrences')->default(1);
			$table->timestamp('first_occurrence')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('latest_occurrence')->nullable();
			$table->text('contents');
			$table->boolean('is_reported')->default(0);
			$table->string('notification_email', 1024)->default('');
			$table->boolean('is_reportable')->default(1);
			$table->string('error_id')->default('');
			$table->text('url', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'error_logs');
	}

}
