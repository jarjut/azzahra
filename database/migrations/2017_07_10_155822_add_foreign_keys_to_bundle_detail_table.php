<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBundleDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bundle_detail', function(Blueprint $table)
		{
			$table->foreign('id_bundle', 'FK_isibundel')->references('id_bundle')->on('bundle')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_service', 'FK_isibundel_s')->references('id_service')->on('service')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bundle_detail', function(Blueprint $table)
		{
			$table->dropForeign('FK_isibundel');
			$table->dropForeign('FK_isibundel_s');
		});
	}

}
