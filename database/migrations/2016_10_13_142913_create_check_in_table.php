<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCheckInTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('check_in', function(Blueprint $table)
		{
			$table->char('id_user', 8);
			$table->char('jumlah_poin_restoran', 3);
			$table->timestamp('waktu')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->primary(['id_user','jumlah_poin_restoran','waktu']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('check_in');
	}

}
