<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToReservasiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('reservasi', function(Blueprint $table)
		{
			$table->foreign('id_pegawai', 'FK_melayani')->references('id_pegawai')->on('pegawai')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_customer', 'FK_mereservasi')->references('id_customer')->on('customers')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_service', 'FK_reservasi_layanan')->references('id_service')->on('service')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_bundle', 'FK_reservasi_paket')->references('id_bundle')->on('bundle')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('kodeCabang', 'FK_tempat')->references('kodeCabang')->on('cabang')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_jam', 'FK_waktu')->references('id_jam')->on('jamreservasi')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('reservasi', function(Blueprint $table)
		{
			$table->dropForeign('FK_melayani');
			$table->dropForeign('FK_mereservasi');
			$table->dropForeign('FK_reservasi_layanan');
			$table->dropForeign('FK_reservasi_paket');
			$table->dropForeign('FK_tempat');
			$table->dropForeign('FK_waktu');
		});
	}

}
