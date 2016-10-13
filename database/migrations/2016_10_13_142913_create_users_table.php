<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->string('nama_lengkap', 100);
			$table->string('email', 50)->unique('email');
			$table->string('password', 100);
			$table->string('id_photo', 100);
			$table->text('deskripsi', 65535);
			$table->integer('total_point');
			$table->boolean('isClient')->default(0);
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
		Schema::drop('users');
	}

}
