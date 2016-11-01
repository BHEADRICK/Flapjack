<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeProjectTaskTemplatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'project_task_templates', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('project_id');
			$table->integer('parent_id')->nullable();
			$table->integer('assigned_user_id')->nullable();
			$table->string('name');
			$table->decimal('rate', 10)->nullable();
			$table->decimal('hours', 10)->nullable();
			$table->text('notes', 65535)->nullable();
			$table->boolean('is_viewable')->default(0);
			$table->integer('milestone_id')->default(0);
			$table->integer('order')->default(0);
			$table->boolean('is_flat_rate')->default(0);
			$table->float('projected_hours', 10, 0)->default(0);
			$table->integer('status_id')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'project_task_templates');
	}

}
