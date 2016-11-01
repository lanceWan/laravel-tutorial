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
    	//datatables固定返回格式
    	return [
	        'draw' => $draw,
	        'recordsTotal' => $count,
	        'recordsFiltered' => $count,
	        'data' => $permissions,
	    ];
	}
}