<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'clients', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('first_name', 64)->nullable()->default('');
			$table->string('last_name', 64)->nullable()->default('');
			$table->string('title', 64)->nullable()->default('');
			$table->string('email', 128)->nullable()->default('');
			$table->string('company', 128)->nullable()->default('');
			$table->text('address', 65535)->nullable();
			$table->string('phone', 64)->nullable()->default('');
			$table->string('fax', 64)->nullable()->default('');
			$table->string('mobile', 64)->nullable()->default('');
			$table->string('website', 128)->nullable()->default('');
			$table->text('profile', 65535)->nullable();
			$table->string('unique_id', 10)->nullable()->default('');
			$table->string('passphrase', 32)->nullable()->default('');
			$table->dateTime('created');
			$table->timestamp('modified')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('support_user_id')->default(0);
			$table->string('language')->default('');
			$table->boolean('can_create_support_tickets')->default(0);
			$table->integer('business_identity')->nullable();
			$table->integer('owner_id')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'clients');
	}

}
