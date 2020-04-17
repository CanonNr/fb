<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$router->get('/', 'Admin\LoginController@index');

$router->group(['prefix' => '/admin'], function ($router) {
    $router->get('/login', 'Admin\LoginController@index');
    $router->get('/logout', 'Admin\LoginController@logout');
    $router->get('/login/action', 'Admin\LoginController@action');

    $router->group(['middleware'=>['admin']], function ($router) {
        $router->get('/', 'Admin\IndexController@index');

        $router->group(['prefix' => '/user'], function ($router) {
            $router->get('/', 'Admin\UserController@index');
        });
    });

});
