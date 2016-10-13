<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePointHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('point_history', function(Blueprint $table)
		{
			$table->char('email', 8);
			$table->char('id_point', 3);
			$table->timestamp('waktu')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('nominal_poin');
			$table->string('nama_transaksi', 10);
			$table->primary(['email','id_point','waktu']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('point_history');
	}

}
