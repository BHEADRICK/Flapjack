<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePancakeProposalSectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create(Config::get('db.prefix', '') . 'proposal_sections', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('proposal_id');
			$table->string('title');
			$table->string('subtitle');
			$table->text('contents', 65535);
			$table->integer('key');
			$table->integer('parent_id');
			$table->integer('page_key');
			$table->string('section_type', 128)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(Config::get('db.prefix', '') . 'proposal_sections');
	}

}
