<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Permission;
use Entrust;
use Redirect;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 判断用户角色
        // dd(auth()->user()->hasRole('admin'));
        // dd(auth()->user()->hasRole('user'));

        // 判断用户是否有相应权限
        // dd(auth()->user()->can('create users'));

        // 匹配模式
        // dd(auth()->user()->can('*users'));

        // 多个角色或权限判断
        // dd(auth()->user()->can(['create users','aaaa'],true));
        // dd(auth()->user()->can(['create users','aaaa']));

        // dd(auth()->user()->hasRole(['admin','user']));
        // dd(auth()->user()->hasRole(['admin','user'],true));
        // 
        // dd(auth()->user()->ability(array('admin', 'user'), array('create users', 'edit users'),['validate_all' => true,'return_type' => 'both']));

        Entrust::routeNeedsRole('/home', 'owner', 'admin');

        return view('home');
    }
}
