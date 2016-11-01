<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeTicketPrioritiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'ticket_priorities', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title');
			$table->string('background_color', 50);
			$table->string('font_color', 50);
			$table->string('text_shadow', 50);
			$table->string('box_shadow', 50);
			$table->float('default_rate', 10, 0)->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'ticket_priorities');
	}

}