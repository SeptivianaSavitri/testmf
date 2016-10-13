<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRestoransTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('restorans', function(Blueprint $table)
		{
			$table->char('id', 3)->primary();
			$table->string('nama', 100);
			$table->string('no_telepon', 20)->nullable();
			$table->string('lokasi', 30);
			$table->text('deskripsi', 65535)->nullable();
			$table->integer('tax');
			$table->decimal('rate', 5);
			$table->string('admin', 100);
			$table->timestamps();
			$table->text('id_photo', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('restorans');
	}

}
