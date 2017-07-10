<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReservasiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reservasi', function(Blueprint $table)
		{
			$table->integer('id_reservasi', true);
			$table->integer('id_bundle')->nullable()->index('FK_reservasi_paket');
			$table->integer('id_pegawai')->index('FK_melayani');
			$table->integer('id_jam')->index('FK_waktu');
			$table->integer('id_service')->nullable()->index('FK_reservasi_layanan');
			$table->char('kodeCabang', 6)->index('FK_tempat');
			$table->integer('id_customer')->index('FK_mereservasi');
			$table->date('tanggal');
			$table->boolean('status')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reservasi');
	}

}
