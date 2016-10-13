<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminRoleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin_role', function(Blueprint $table)
		{
			$table->integer('role_id')->unsigned();
			$table->integer('admin_id')->unsigned()->index('admin_role_admin_id_foreign');
			$table->primary(['role_id','admin_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('admin_role');
	}

}
