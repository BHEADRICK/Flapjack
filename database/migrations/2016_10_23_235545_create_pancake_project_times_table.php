<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeProjectTimesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'project_times', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('project_id')->unsigned()->index('project_id');
			$table->integer('task_id')->unsigned()->nullable();
			$table->integer('user_id')->unsigned()->nullable()->index('user_id');
			$table->string('start_time', 5)->default('');
			$table->string('end_time', 5)->default('');
			$table->decimal('minutes', 16, 8);
			$table->integer('date')->nullable()->index('date');
			$table->text('note', 65535)->nullable();
			$table->integer('invoice_item_id')->default(0);
			$table->timestamp('date_updated')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'project_times');
	}

}
