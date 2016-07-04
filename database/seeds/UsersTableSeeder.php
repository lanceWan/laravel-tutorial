<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = factory('App\User')->create([
        	'name' => 'iwanli',
        	'email' => 'ibanya@126.com',
        	'password' => bcrypt('123456')
        ]);

        $users = factory('App\User',3)->create([
        	'password' => bcrypt('123456')
        ]);
    }
}
