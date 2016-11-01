<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeInvoicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'invoices', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('unique_id', 10)->nullable()->default('')->index('unique_id');
			$table->integer('client_id')->nullable()->default(0);
			$table->decimal('amount', 20, 10)->nullable()->default(0.0000000000);
			$table->integer('due_date')->nullable()->default(0);
			$table->string('invoice_number')->nullable()->default('');
			$table->text('notes', 65535)->nullable();
			$table->text('description', 65535)->nullable();
			$table->string('txn_id')->nullable()->default('');
			$table->float('payment_gross', 10, 0)->nullable()->default(0);
			$table->string('item_name')->nullable()->default('');
			$table->string('payment_hash', 32)->nullable()->default('');
			$table->string('payment_status')->nullable()->default('');
			$table->string('payment_type')->nullable()->default('');
			$table->integer('payment_date')->nullable()->default(0);
			$table->string('payer_status')->nullable()->default('');
			$table->string('type')->nullable()->default('DETAILED');
			$table->integer('date_entered')->nullable()->default(0);
			$table->boolean('is_paid')->nullable()->default(0);
			$table->boolean('is_recurring')->nullable()->default(0);
			$table->string('frequency', 2)->nullable();
			$table->boolean('auto_send')->default(0);
			$table->integer('recur_id')->default(0);
			$table->integer('currency_id')->default(0);
			$table->float('exchange_rate', 10, 5)->default(1.00000);
			$table->integer('proposal_id')->default(0);
			$table->integer('send_x_days_before')->default(7);
			$table->integer('has_sent_notification')->default(0);
			$table->integer('last_sent')->default(0);
			$table->integer('next_recur_date')->default(0);
			$table->integer('last_viewed')->default(0);
			$table->boolean('is_viewable');
			$table->integer('owner_id')->default(0);
			$table->integer('project_id')->default(0);
			$table->string('status')->default('');
			$table->integer('last_status_change')->default(0);
			$table->boolean('is_archived')->default(0);
			$table->boolean('auto_charge')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'invoices');
	}

}
