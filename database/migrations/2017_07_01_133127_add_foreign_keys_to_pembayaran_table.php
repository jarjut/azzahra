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
			$table->foreign('id_reservasi', 'FK_Relationship_12')->references('id_reservasi')->on('reservasi')->onUpdate('CASCADE')->onDelete('CASCADE');
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
			$table->dropForeign('FK_Relationship_12');
			$table->dropForeign('FK_Relationship_13');
		});
	}

}
