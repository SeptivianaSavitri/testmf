<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFasilitasRestoransTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fasilitas_restorans', function(Blueprint $table)
		{
			$table->foreign('id_restoran', 'fasilitas_restorans_ibfk_1')->references('id')->on('restorans')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fasilitas_restorans', function(Blueprint $table)
		{
			$table->dropForeign('fasilitas_restorans_ibfk_1');
		});
	}

}
