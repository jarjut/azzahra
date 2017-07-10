<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBundleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bundle', function(Blueprint $table)
		{
			$table->integer('id_bundle', true);
			$table->string('nama', 50);
			$table->integer('harga');
			$table->string('deskripsi', 250)->nullable();
			$table->string('gambar', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bundle');
	}

}
