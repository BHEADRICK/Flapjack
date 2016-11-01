<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeTaxesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'taxes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 200)->nullable()->default('');
			$table->float('value', 10, 0)->nullable()->default(0);
			$table->string('reg', 100)->nullable()->default('');
			$table->boolean('is_compound')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'taxes');
	}

}
