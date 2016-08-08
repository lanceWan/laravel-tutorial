<?php
namespace App\Repositories\Eloquent;
use App\Repositories\Eloquent\Repository;
use App\Models\Menu;
class MenuRepository extends Repository
{
	
	public function model()
	{
		return Menu::class;
	}

	/**
	 * 递归菜单数据
	 * @author 晚黎
	 * @date   2016-08-09
	 * @param  [type]     $menus [description]
	 * @param  integer    $pid   [description]
	 * @return [type]            [description]
	 */
	public function sortMenu($menus,$pid=0)
	{
		$arr = [];
		if (empty($menus)) {
			return '';
		}

		foreach ($menus as $key => $v) {
			if ($v['parent_id'] == $pid) {
				$arr[$key] = $v;
				$arr[$key]['child'] = self::sortMenu($menus,$v['id']);
			}
		}
		return $arr;
	}

	/**
	 * 排序子菜单并缓存
	 * @author 晚黎
	 * @date   2016-08-09
	 * @param  string     $value [description]
	 * @return [type]            [description]
	 */
	public function sortMenuSetCache($menus)
	{
		foreach ($menus as $key => &$v) {
			if ($v['child']) {
				$sort = array_column($v['child'], 'sort');
				array_multisort($sort,SORT_DESC,$v['child']);
			}
		}
		return $menus;
	}


	
}