<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPegawaiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pegawai', function(Blueprint $table)
		{
			$table->foreign('kodeCabang', 'FK_bekerja')->references('kodeCabang')->on('cabang')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pegawai', function(Blueprint $table)
		{
			$table->dropForeign('FK_bekerja');
		});
	}

}
