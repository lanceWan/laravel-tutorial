<?php

use Illuminate\Database\Seeder;
use App\Models\permission;
class PermissionsTableSeeser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = new Permission;
        $permission->name = 'create users';
        $permission->display_name = '创建用户';
        $permission->description = '创建用户';
        $permission->save();

        $permission = new Permission;
        $permission->name = 'edit users';
        $permission->display_name = '修改用户';
        $permission->description = '修改用户';
        $permission->save();

        $permission = new Permission;
        $permission->name = 'destroy users';
        $permission->display_name = '删除用户';
        $permission->description = '删除用户';
        $permission->save();

        $permission = new Permission;
        $permission->name = 'ban users';
        $permission->display_name = '禁用用户';
        $permission->description = '禁用用户';
        $permission->save();

        $permission = new Permission;
        $permission->name = 'login backend';
        $permission->display_name = '登录后台';
        $permission->description = '登录后台';
        $permission->save();
    }
}
