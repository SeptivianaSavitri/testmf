<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWaktuOperasionalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('waktu_operasionals', function(Blueprint $table)
		{
			$table->char('id_restoran', 3);
			$table->string('hari', 6);
			$table->time('waktu_buka')->nullable();
			$table->time('waktu_tutup')->nullable();
			$table->timestamps();
			$table->primary(['id_restoran','hari']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('waktu_operasionals');
	}

}
