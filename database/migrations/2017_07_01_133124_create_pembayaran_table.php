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
			$table->integer('id_reservasi')->nullable()->index('FK_Relationship_12');
			$table->char('kode_voucher', 10)->nullable()->index('FK_Relationship_13');
			$table->timestamp('tanggal')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('jumlah');
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
