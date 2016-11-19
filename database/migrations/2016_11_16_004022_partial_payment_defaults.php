<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PartialPaymentDefaults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('partial_payments', function (Blueprint $table) {
            $table->float('amount', 10, 0)->default(0)->change();
            $table->float('gateway_surcharge', 10, 0)->default(0)->change();
			$table->boolean('is_percentage')->default(0)->change();
			$table->integer('due_date')->default(0)->change();
			$table->text('notes', 65535)->nullable()->change();
			$table->float('payment_gross', 10, 0)->default(0)->change();
			$table->float('transaction_fee', 10, 0)->default(0)->change();
			$table->string('item_name')->nullable()->change();
			$table->boolean('is_paid')->default(0)->change();
			$table->integer('payment_date')->nullable()->change();
			$table->string('payment_type')->nullable()->change();
			$table->string('payer_status')->nullable()->change();
			$table->string('payment_status')->nullable()->change();

			$table->string('payment_method')->nullable()->change();
			$table->integer('key')->nullable()->change();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('partial_payments', function (Blueprint $table) {
            //
        });
    }
}
