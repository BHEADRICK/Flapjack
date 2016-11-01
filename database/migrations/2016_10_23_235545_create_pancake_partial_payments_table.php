<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakePartialPaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'partial_payments', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('unique_invoice_id', 10)->index('unique_invoice_id');
			$table->float('amount', 10, 0);
			$table->float('gateway_surcharge', 10, 0);
			$table->boolean('is_percentage');
			$table->integer('due_date');
			$table->text('notes', 65535);
			$table->string('txn_id')->default('');
			$table->float('payment_gross', 10, 0);
			$table->string('item_name');
			$table->boolean('is_paid');
			$table->integer('payment_date');
			$table->string('payment_type');
			$table->string('payer_status');
			$table->string('payment_status');
			$table->string('unique_id', 10);
			$table->string('payment_method');
			$table->integer('key');
			$table->integer('improved')->default(1);
			$table->float('transaction_fee', 10, 0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'partial_payments');
	}

}
