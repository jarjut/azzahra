<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBundleDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bundle_detail', function(Blueprint $table)
		{
			$table->integer('id_bundle');
			$table->integer('id_service')->index('FK_isibundel_s');
			$table->primary(['id_bundle','id_service']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bundle_detail');
	}

}
