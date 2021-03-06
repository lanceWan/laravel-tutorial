<?php
namespace App\Repositories\Eloquent;
use App\Repositories\Eloquent\Repository;
use App\Models\Permission;
class permissionRepository extends Repository
{

	public function model()
	{
		return Permission::class;
	}
	/**
	 * 添加权限
	 * @author 晚黎
	 * @date   2016-10-21
	 * @param  [type]     $attributes [description]
	 * @return [type]                 [description]
	 */
	public function createPermission($attributes)
	{
		$result = $this->create($attributes);
		if ($result) {
			flash('添加权限成功');
		}else{
			flash('添加权限失败','error');
		}
		return $result;
	}

	public function ajaxIndex()
	{
		// datatables请求次数
    	$draw = request('draw', 1);
    	// 开始条数
		$start = request('start',config('admin.global.list.start'));
		// 每页显示数目
		$length = request('length',config('admin.global.list.length'));

		// 排序
	    $order['name'] = request('columns.' .request('order.0.column',0) . '.name');
	    $order['dir'] = request('order.0.dir','asc');

	    $search['value'] = request('search.value','');

	    $search['regex'] = request('search.regex',false);

	    $permission = $this->model;

	    // 搜索框中的值
	    if ($search['value']) {
	        if($search['regex'] == 'true'){
	            $permission = $permission->where('name', 'like', "%{$search['value']}%")->orWhere('display_name','like', "%{$search['value']}%");
	        }else{
	            $permission = $permission->where('name', $search['value'])->orWhere('display_name', $search['value']);
	        }
	    }

	    $count = $permission->count();

	    $permission = $permission->orderBy($order['name'], $order['dir']);
    	$permissions = $permission->offset($start)->limit($length)->get();

			if ($permissions) {
				foreach ($permissions as &$v) {
					$v->actionButton = $v->getActionButton();
				}
			}

    	//datatables固定返回格式
    	return [
	        'draw' => $draw,
	        'recordsTotal' => $count,
	        'recordsFiltered' => $count,
	        'data' => $permissions,
	    ];
	}
	// 修改权限视图数据
	public function editView($id)
	{
		$permission = $this->find($id);
		if ($permission) {
			return $permission;
		}
		abort(404);
	}
	// 修改权限数据
	public function updatePermission($attributes,$id)
	{
		$result = $this->update($attributes,$id);
		if ($result) {
			flash('修改权限成功');
		}else{
			flash('修改权限失败','error');
		}
		return $result;
	}
	/**
	 * 删除权限
	 * @author 晚黎
	 * @date   2016-11-28
	 * @param  [type]     $id [description]
	 * @return [type]         [description]
	 */
	public function destroyPermission($id)
	{
		$result = $this->delete($id);
		if ($result) {
			flash('修改权限成功');
		}else{
			flash('修改权限失败','error');
		}
		return $result;
	}
}
