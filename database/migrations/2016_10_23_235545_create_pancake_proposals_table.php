<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeProposalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'proposals', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('unique_id', 10);
			$table->integer('created');
			$table->integer('last_sent')->default(0);
			$table->integer('last_status_change')->default(0);
			$table->integer('last_viewed')->default(0);
			$table->integer('invoice_id');
			$table->integer('project_id');
			$table->integer('client_id');
			$table->string('title');
			$table->string('status');
			$table->integer('proposal_number')->default(0);
			$table->string('client_company')->default('');
			$table->text('client_address', 65535)->nullable();
			$table->string('client_name')->default('');
			$table->boolean('is_viewable');
			$table->integer('owner_id')->default(0);
			$table->boolean('is_archived')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'proposals');
	}

}
