<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePesananTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pesanan', function(Blueprint $table)
		{
			$table->string('id_user', 50);
			$table->integer('id_orang');
			$table->char('id_menu', 8);
			$table->bigInteger('id_pesanan', true);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pesanan');
	}

}
