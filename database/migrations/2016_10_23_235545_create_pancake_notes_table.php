<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeNotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'notes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('client_id')->index('client_id');
			$table->text('note', 65535);
			$table->timestamp('submitted')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'notes');
	}

}
