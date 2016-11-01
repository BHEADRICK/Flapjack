<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeStorePurchasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'store_purchases', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('plugin_unique_id');
			$table->string('plugin_title');
			$table->string('plugin_type_id');
			$table->text('filepath', 65535);
			$table->string('current_version');
			$table->string('latest_version');
			$table->text('changelog_since_current_version');
			$table->timestamp('date_added')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'store_purchases');
	}

}
