<?php
namespace App\Repositories\Presenter;

class MenuPresenter
{
	
	public function getMenu($menus)
	{
		if ($menus) {
			$option = '<option value="0">顶级菜单</option>';
			foreach ($menus as $v) {
				$option .= '<option value="'.$v->id.'">'.$v->name.'</option>';
			}
			return $option;
		}
		return '<option value="0">顶级菜单</option>';
	}
}