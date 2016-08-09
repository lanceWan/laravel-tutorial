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

	/**
	 * 菜单列表视图
	 * @author 晚黎
	 * @date   2016-08-10
	 * @param  [type]     $menus [description]
	 * @return [type]            [description]
	 */
	public function getMenuList($menus)
	{
		if ($menus) {
			$item = '';
			foreach ($menus as $v) {
				$item.= $this->getNestableItem($v['id'],$v['name'],$v['child']);
			}
			return $item;
		}
		return '暂无菜单';
	}

	/**
	 * 返回菜单HTML代码
	 * @author 晚黎
	 * @date   2016-08-10
	 * @param  [type]     $id    [description]
	 * @param  [type]     $name  [description]
	 * @param  [type]     $child [description]
	 * @return [type]            [description]
	 */
	protected function getNestableItem($id,$name,$child)
	{
		if ($child) {
			return $this->getHandleList($id,$name,$child);
		}
		return '<li class="dd-item dd3-item" data-id="'.$id.'"><div class="dd-handle dd3-handle"> </div><div class="dd3-content"> '.$name.' </div></li>';
	}

	/**
	 * 判断是否有子集
	 * @author 晚黎
	 * @date   2016-08-10
	 * @param  [type]     $id    [description]
	 * @param  [type]     $name  [description]
	 * @param  [type]     $child [description]
	 * @return [type]            [description]
	 */
	protected function getHandleList($id,$name,$child)
	{
		$handle = '<li class="dd-item dd3-item" data-id="'.$id.'"><div class="dd-handle dd3-handle"> </div><div class="dd3-content"> '.$name.' </div><ol class="dd-list">';
		foreach ($child as $v) {
			$handle .= $this->getNestableItem($v['id'],$v['name'],$v['child']);
		}
		$handle .= '</ol></li>';
		return $handle;
	}
}