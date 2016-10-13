<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToWaktuOperasionalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('waktu_operasionals', function(Blueprint $table)
		{
			$table->foreign('id_restoran', 'waktu_operasionals_ibfk_1')->references('id')->on('restorans')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('waktu_operasionals', function(Blueprint $table)
		{
			$table->dropForeign('waktu_operasionals_ibfk_1');
		});
	}

}
