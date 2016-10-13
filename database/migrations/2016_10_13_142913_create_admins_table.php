<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admins', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email')->unique();
			$table->string('password');
			$table->text('permissions', 65535)->nullable();
			$table->boolean('activated')->default(0);
			$table->string('activation_code')->nullable()->index();
			$table->dateTime('activated_at')->nullable();
			$table->dateTime('last_login')->nullable();
			$table->string('persist_code')->nullable();
			$table->string('reset_password_code')->nullable()->index();
			$table->string('remember_token', 100)->nullable();
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
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
		Schema::drop('admins');
	}

}
