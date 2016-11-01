<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeProjectTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'project_tasks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('project_id')->unsigned();
			$table->integer('milestone_id')->default(0);
			$table->string('name');
			$table->decimal('rate', 10)->default(0.00);
			$table->decimal('hours', 10)->default(0.00);
			$table->text('notes', 65535);
			$table->integer('due_date')->nullable()->default(0);
			$table->boolean('completed');
			$table->boolean('is_viewable');
			$table->float('projected_hours', 10, 0)->default(0);
			$table->integer('status_id')->nullable()->default(0);
			$table->integer('assigned_user_id')->nullable();
			$table->integer('parent_id')->default(0);
			$table->integer('owner_id')->default(0);
			$table->dateTime('date_entered')->nullable();
			$table->dateTime('date_updated')->nullable();
			$table->integer('order')->default(0);
			$table->boolean('is_flat_rate')->default(0);
			$table->integer('invoice_item_id')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'project_tasks');
	}

}
