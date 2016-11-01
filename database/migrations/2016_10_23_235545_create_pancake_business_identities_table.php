<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeBusinessIdentitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'business_identities', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('site_name', 1024)->default('');
			$table->string('admin_name', 1024)->default('');
			$table->string('mailing_address', 1024)->default('');
			$table->string('notify_email', 1024)->default('');
			$table->string('logo_filename', 1024)->default('');
			$table->string('billing_email', 1024)->default('');
			$table->string('brand_name', 1024)->default('');
			$table->boolean('show_name_along_with_logo')->default(0);
			$table->string('billing_email_from', 1024)->default('');
			$table->string('notify_email_from', 1024)->default('');
			$table->integer('logo_width')->unsigned()->nullable();
			$table->integer('logo_height')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'business_identities');
	}

}
