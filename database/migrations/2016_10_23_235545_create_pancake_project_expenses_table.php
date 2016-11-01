<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeProjectExpensesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'project_expenses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('project_id')->unsigned()->index('project_id');
			$table->integer('payment_source_id')->nullable();
			$table->integer('invoice_id')->nullable();
			$table->string('invoice_number')->nullable();
			$table->date('due_date')->nullable();
			$table->integer('category_id')->nullable();
			$table->integer('supplier_id')->nullable();
			$table->string('name')->default('');
			$table->text('description', 65535)->nullable();
			$table->integer('qty')->default(1);
			$table->decimal('rate');
			$table->integer('tax_id')->default(0);
			$table->text('payment_details', 65535);
			$table->integer('owner_id')->default(0);
			$table->integer('invoice_item_id')->default(0);
			$table->string('receipt', 1024)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'project_expenses');
	}

}
