<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role;
		$admin->name         = 'admin';
		$admin->display_name = '超级管理员';
		$admin->description  = '炒鸡管理员';
		$admin->save();

		$owner = new Role;
		$owner->name         = 'user';
		$owner->display_name = '普通管理';
		$owner->description  = '普通管理';
		$owner->save();


		$allPermission = array_column(Permission::all()->toArray(), 'id');
		$admin->perms()->sync($allPermission);
		// $owner->attachPermissions(array($createPost, $editUser));

		// 普通管理
		$createUser = Permission::where('display_name','创建用户')->first();
		$owner->attachPermission($createUser);

    }
}