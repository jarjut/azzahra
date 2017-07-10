<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPembayaranTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pembayaran', function(Blueprint $table)
		{
			$table->foreign('id_bundle', 'FK_Pembayaran_Bundle')->references('id_bundle')->on('bundle')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('kodeCabang', 'FK_Pembayaran_Cabang')->references('kodeCabang')->on('cabang')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_service', 'FK_Pembayaran_Service')->references('id_service')->on('service')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('kode_voucher', 'FK_Relationship_13')->references('kode_voucher')->on('voucher')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pembayaran', function(Blueprint $table)
		{
			$table->dropForeign('FK_Pembayaran_Bundle');
			$table->dropForeign('FK_Pembayaran_Cabang');
			$table->dropForeign('FK_Pembayaran_Service');
			$table->dropForeign('FK_Relationship_13');
		});
	}

}
