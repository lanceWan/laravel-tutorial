<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\MenuRepository;
use App\Http\Requests\MenuRequest;
class MenuController extends Controller
{
    private $menu;

	public function __construct(MenuRepository $menu)
	{
		$this->menu = $menu;
	}

    public function index()
    {
        $menu = $this->menu->findByField('parent_id',0);

        $menuList = $this->menu->getMenuList();
        // dd($menuList);
    	return view('admin.menu.list')->with(compact('menu','menuList'));
    }

    /**
     * 添加菜单
     * @author 晚黎
     * @date   2016-08-02
     * @return [type]     [description]
     */
    public function store(MenuRequest $request)
    {
    	$result = $this->menu->create($request->all());
    	if ($result) {
    		flash('添加菜单成功', 'success');
    	}else{
			flash('添加菜单失败', 'error');
    	}
    	return redirect('admin/menu');
    }
}
