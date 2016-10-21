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
}