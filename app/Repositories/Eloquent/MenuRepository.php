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
	
}