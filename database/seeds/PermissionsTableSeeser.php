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
            'name' => 'system.login',
            'display_name' => '登录后台',
            'description' => '登录后台',
        ]);

        /**
         * 菜单权限
         */
        Permission::create([
            'name' => 'system.manage',
            'display_name' => '系统管理',
            'description' => '系统管理',
        ]);

        Permission::create([
            'name' => 'menu.list',
            'display_name' => '菜单列表',
            'description' => '菜单列表',
        ]);

        Permission::create([
            'name' => 'menu.add',
            'display_name' => '添加菜单',
            'description' => '添加菜单',
        ]);

        Permission::create([
            'name' => 'menu.edit',
            'display_name' => '修改菜单',
            'description' => '修改菜单',
        ]);

        Permission::create([
            'name' => 'menu.delete',
            'display_name' => '删除菜单',
            'description' => '删除菜单',
        ]);


        /**
         * 权限
         */
        Permission::create([
            'name' => 'permission.list',
            'display_name' => '权限列表',
            'description' => '权限列表',
        ]);

        Permission::create([
            'name' => 'permission.add',
            'display_name' => '添加权限',
            'description' => '添加权限',
        ]);

        Permission::create([
            'name' => 'permission.edit',
            'display_name' => '修改权限',
            'description' => '修改权限',
        ]);

        Permission::create([
            'name' => 'permission.delete',
            'display_name' => '删除权限',
            'description' => '删除权限',
        ]);

        /**
         * 角色
         */
        Permission::create([
            'name' => 'role.delete',
            'display_name' => '删除角色',
            'description' => '删除角色',
        ]);

        Permission::create([
            'name' => 'role.list',
            'display_name' => '角色列表',
            'description' => '角色列表',
        ]);

        Permission::create([
            'name' => 'role.add',
            'display_name' => '添加角色',
            'description' => '添加角色',
        ]);

        Permission::create([
            'name' => 'role.edit',
            'display_name' => '修改角色',
            'description' => '修改角色',
        ]);



        /**
         * 角色
         */

        Permission::create([
            'name' => 'user.list',
            'display_name' => '用户列表',
            'description' => '用户列表',
        ]);

        Permission::create([
            'name' => 'user.add',
            'display_name' => '添加用户',
            'description' => '添加用户',
        ]);

        Permission::create([
            'name' => 'user.edit',
            'display_name' => '修改用户',
            'description' => '修改用户',
        ]);

        Permission::create([
            'name' => 'user.delete',
            'display_name' => '删除用户',
            'description' => '删除用户',
        ]);
    }
}
