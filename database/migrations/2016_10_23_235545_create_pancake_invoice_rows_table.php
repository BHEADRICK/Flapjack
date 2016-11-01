<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeInvoiceRowsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'invoice_rows', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('unique_id')->index('unique_id');
			$table->string('name')->nullable()->default('');
			$table->text('description', 65535)->nullable();
			$table->float('qty', 10, 0)->nullable()->default(0);
			$table->integer('tax_id')->nullable()->default(0);
			$table->string('rate')->nullable()->default('');
			$table->string('total')->nullable()->default('');
			$table->smallInteger('sort')->default(0);
			$table->string('type', 128)->nullable();
			$table->string('item_type_table')->default('');
			$table->integer('item_type_id')->default(0);
			$table->decimal('discount', 65, 10)->default(0.0000000000);
			$table->boolean('discount_is_percentage')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'invoice_rows');
	}

}
