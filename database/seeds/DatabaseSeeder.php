<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('AdminsTableSeeder');
        $this->call('CheckInTableSeeder');
        $this->call('LinksTableSeeder');
        $this->call('MenusTableSeeder');
        $this->call('PasswordRemindersTableSeeder');
        $this->call('PermissionsTableSeeder');
        $this->call('PesananTableSeeder');
        $this->call('PhotosTableSeeder');
        $this->call('PointHistoryTableSeeder');
        $this->call('PointTableSeeder');
        $this->call('PromosTableSeeder');
        $this->call('RestoransTableSeeder');
        $this->call('FasilitasRestoransTableSeeder');
        $this->call('JenisMasakansTableSeeder');
        $this->call('ReviewsTableSeeder');
        $this->call('RolesTableSeeder');
        $this->call('PermissionRoleTableSeeder');
        $this->call('AdminRoleTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('WaktuLoginUsersTableSeeder');
        $this->call('WaktuOperasionalsTableSeeder');
    }
}
