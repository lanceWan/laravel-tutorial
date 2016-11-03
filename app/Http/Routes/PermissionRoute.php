<?php
$router->group(['prefix' => 'permission'],function ($router)
{
	$router->get('ajaxIndex','PermissionController@ajaxIndex')->name('admin.permission.ajaxIndex');
});
$router->resource('permission','PermissionController');