<?php
namespace App\Http\Middleware;
use Closure;
use Route;
class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$model)
    {
        $routeName = Route::currentRouteName();
        $permission = '';
        switch ($routeName) {
            case 'admin.'.$model.'.index':
            case 'admin.'.$model.'.ajaxIndex':
                $permission = config('admin.permissions.'.$model.'s.list','');
                break;
            case 'admin.'.$model.'.create':
            case 'admin.'.$model.'.store':
                $permission = config('admin.permissions.'.$model.'s.add','');
                break;
            case 'admin.'.$model.'.edit':
            case 'admin.'.$model.'.update':
                $permission = config('admin.permissions.'.$model.'s.edit','');
                break;

            default:
                $permission = config('admin.permissions.'.$model,'');
                break;
        }
        if (!$request->user()->can($permission)) {
            abort(500,trans('你没有权限次操作'));
        }
        return $next($request);
    }
}
