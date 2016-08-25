<?php

use Illuminate\Database\Seeder;
use App\Models\Menu;
class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$backend = Menu::create([
        	'name' => '控制台',
            'parent_id' => '0',
	        'slug' => 'admin.system.login',
            'url' => 'admin',
            'heightlight_url' => 'admin',
        ]);

        $system = Menu::create([
        	'name' => '系统管理',
            'parent_id' => '0',
	        'slug' => 'admin.system.manage',
	        'url' => 'admin/menu',
            'heightlight_url' => 'admin/menu*,admin/user*,admin/role*,admin/permission*',
        ]);

        Menu::create([
        	'name' => '菜单管理',
	        'parent_id' => $system->id,
            'slug' => 'admin.menus.list',
            'url' => 'www.iwanli.me',
	        'heightlight_url' => 'www.iwanli.me',
        ]);

        Menu::create([
        	'name' => '用户管理',
	        'parent_id' => $system->id,
            'slug' => 'admin.menus.add',
	        'url' => 'www.iwanli.me',
        ]);

        Menu::create([
        	'name' => '权限管理',
	        'parent_id' => $system->id,
            'slug' => 'admin.permissions.list',
	        'url' => 'www.iwanli.me',
        ]);

        Menu::create([
        	'name' => '角色管理',
	        'parent_id' => $system->id,
            'slug' => 'admin.roles.list',
	        'url' => 'www.iwanli.me',
        ]);

        $html = Menu::create([
        	'name' => 'web前端',
	        'parent_id' => '0',
	        'url' => 'www.iwanli.me',
        ]);

        Menu::create([
        	'name' => 'ReactJs',
	        'parent_id' => $html->id,
	        'url' => 'www.iwanli.me',
        ]);

        Menu::create([
        	'name' => 'JavaScript',
	        'parent_id' => $html->id,
	        'url' => 'www.iwanli.me',
        ]);

        Menu::create([
        	'name' => 'AngularJs',
	        'parent_id' => $html->id,
	        'url' => 'www.iwanli.me',
        ]);

        Menu::create([
        	'name' => 'NodeJs',
	        'parent_id' => $html->id,
	        'url' => 'www.iwanli.me',
        ]);


    }
}
