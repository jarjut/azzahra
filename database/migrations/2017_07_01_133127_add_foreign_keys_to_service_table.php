<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToServiceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('service', function(Blueprint $table)
		{
			$table->foreign('id_category', 'FK_kategori_layanan')->references('id_category')->on('category')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('service', function(Blueprint $table)
		{
			$table->dropForeign('FK_kategori_layanan');
		});
	}

}
