<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToJenisMasakansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('jenis_masakans', function(Blueprint $table)
		{
			$table->foreign('id_restoran', 'jenis_masakans_ibfk_1')->references('id')->on('restorans')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('jenis_masakans', function(Blueprint $table)
		{
			$table->dropForeign('jenis_masakans_ibfk_1');
		});
	}

}
