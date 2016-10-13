<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAdminRoleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('admin_role', function(Blueprint $table)
		{
			$table->foreign('admin_id')->references('id')->on('admins')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('role_id')->references('id')->on('roles')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('admin_role', function(Blueprint $table)
		{
			$table->dropForeign('admin_role_admin_id_foreign');
			$table->dropForeign('admin_role_role_id_foreign');
		});
	}

}
