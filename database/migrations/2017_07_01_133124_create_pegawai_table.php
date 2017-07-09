<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePegawaiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pegawai', function(Blueprint $table)
		{
			$table->integer('id_pegawai', true);
			$table->char('kodeCabang', 6)->index('FK_bekerja');
			$table->string('nama', 50);
			$table->string('nip', 15);
			$table->string('tempatlahir', 50);
			$table->date('tanggallahir');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pegawai');
	}

}
