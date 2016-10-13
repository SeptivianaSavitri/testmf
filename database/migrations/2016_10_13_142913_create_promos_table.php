<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('promos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('judul', 100);
			$table->text('deskripsi', 65535);
			$table->date('tgl_berlaku_awal');
			$table->date('tgl_berlaku_akhir');
			$table->char('id_restoran', 5);
			$table->binary('id_photo', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('promos');
	}

}
