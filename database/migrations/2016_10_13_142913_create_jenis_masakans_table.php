<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJenisMasakansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jenis_masakans', function(Blueprint $table)
		{
			$table->char('id_restoran', 3);
			$table->string('jenis_masakan', 50);
			$table->timestamps();
			$table->primary(['id_restoran','jenis_masakan']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jenis_masakans');
	}

}
