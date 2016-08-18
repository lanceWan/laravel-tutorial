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
        // 刷新缓存
        $this->menu->sortMenuSetCache();
    	if ($result) {
    		flash('添加菜单成功', 'success');
    	}else{
			flash('添加菜单失败', 'error');
    	}
    	return redirect('admin/menu');
    }

    /**
     * 修改菜单获取数据
     * @author 晚黎
     * @date   2016-08-17
     * @param  [type]     $id [description]
     * @return [type]         [description]
     */
    public function edit($id)
    {
        $menu = $this->menu->editMenu($id);
        return response()->json($menu);
    }
    /**
     * 修改菜单数据
     * @author 晚黎
     * @date   2016-08-19
     * @param  MenuRequest $request [description]
     * @return [type]               [description]
     */
    public function update(MenuRequest $request)
    {
        $this->menu->updateMenu($request);
        return redirect('admin/menu');
    }
}
