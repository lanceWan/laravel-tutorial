<?php
$router->get('/','HomeController@index');
$router->resource('home','HomeController');