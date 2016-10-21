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
        Permission::create([
            'name' => 'admin.system.login',
            'display_name' => '登录后台',
            'description' => '登录后台',
        ]);

        /**
         * 菜单权限
         */
        Permission::create([
            'name' => 'admin.system.manage',
            'display_name' => '系统管理',
            'description' => '系统管理',
        ]);

        Permission::create([
            'name' => 'admin.menus.list',
            'display_name' => '菜单列表',
            'description' => '菜单列表',
        ]);

        Permission::create([
            'name' => 'admin.menus.add',
            'display_name' => '添加菜单',
            'description' => '添加菜单',
        ]);

        Permission::create([
            'name' => 'admin.menus.edit',
            'display_name' => '修改菜单',
            'description' => '修改菜单',
        ]);

        Permission::create([
            'name' => 'admin.menus.delete',
            'display_name' => '删除菜单',
            'description' => '删除菜单',
        ]);


        /**
         * 权限
         */
        Permission::create([
            'name' => 'admin.permissions.list',
            'display_name' => '权限列表',
            'description' => '权限列表',
        ]);

        Permission::create([
            'name' => 'admin.permissions.add',
            'display_name' => '添加权限',
            'description' => '添加权限',
        ]);

        Permission::create([
            'name' => 'admin.permissions.edit',
            'display_name' => '修改权限',
            'description' => '修改权限',
        ]);

        Permission::create([
            'name' => 'admin.permissions.delete',
            'display_name' => '删除权限',
            'description' => '删除权限',
        ]);

        /**
         * 角色
         */
        Permission::create([
            'name' => 'admin.roles.delete',
            'display_name' => '删除角色',
            'description' => '删除角色',
        ]);

        Permission::create([
            'name' => 'admin.roles.list',
            'display_name' => '角色列表',
            'description' => '角色列表',
        ]);

        Permission::create([
            'name' => 'admin.roles.add',
            'display_name' => '添加角色',
            'description' => '添加角色',
        ]);

        Permission::create([
            'name' => 'admin.roles.edit',
            'display_name' => '修改角色',
            'description' => '修改角色',
        ]);

        

        /**
         * 角色
         */

        Permission::create([
            'name' => 'admin.users.list',
            'display_name' => '用户列表',
            'description' => '用户列表',
        ]);

        Permission::create([
            'name' => 'admin.users.add',
            'display_name' => '添加用户',
            'description' => '添加用户',
        ]);

        Permission::create([
            'name' => 'admin.users.edit',
            'display_name' => '修改用户',
            'description' => '修改用户',
        ]);

        Permission::create([
            'name' => 'admin.users.delete',
            'display_name' => '删除用户',
            'description' => '删除用户',
        ]);
    }
}
