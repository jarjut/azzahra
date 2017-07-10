<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePembayaranTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pembayaran', function(Blueprint $table)
		{
			$table->integer('id_pembayaran', true);
			$table->char('kodeCabang', 6)->index('FK_Pembayaran_Cabang');
			$table->string('nama', 50);
			$table->integer('id_bundle')->nullable()->index('FK_Pembayaran_Bundle');
			$table->integer('id_service')->nullable()->index('FK_Pembayaran_Service');
			$table->char('kode_voucher', 10)->nullable()->index('FK_Relationship_13');
			$table->timestamp('tanggal')->default(DB::raw('CURRENT_TIMESTAMP'));
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
		Schema::drop('pembayaran');
	}

}
