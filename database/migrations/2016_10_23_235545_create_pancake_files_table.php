<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'files', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('invoice_unique_id')->index('invoice_unique_id');
			$table->string('orig_filename');
			$table->text('real_filename', 65535);
			$table->integer('download_count')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'files');
	}

}
