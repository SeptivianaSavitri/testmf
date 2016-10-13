<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFasilitasRestoransTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fasilitas_restorans', function(Blueprint $table)
		{
			$table->char('id_restoran', 3);
			$table->string('nama_fasilitas', 100)->default('');
			$table->timestamps();
			$table->primary(['id_restoran','nama_fasilitas']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fasilitas_restorans');
	}

}
