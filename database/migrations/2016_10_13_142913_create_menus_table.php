<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menus', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nama', 100);
			$table->integer('harga');
			$table->char('id_restoran', 5);
			$table->char('kapasitas', 2);
			$table->string('jenis', 30);
			$table->string('kategori', 30);
			$table->text('deskripsi', 65535)->nullable();
			$table->char('id_photo', 9)->nullable();
			$table->decimal('rate', 2, 0);
			$table->integer('jumlah_tested');
			$table->boolean('Is_Paket_Tanpa_Minum')->nullable();
			$table->boolean('Is_Paket_Dgn_Minum')->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('menus');
	}

}
