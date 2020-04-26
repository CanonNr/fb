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

$router->get('/', function (){
    echo "Five Buy";
});

$router->group(['prefix' => '/admin','middleware'=>['orderStatus']], function ($router) {
    $router->get('/login', 'Admin\LoginController@index');
    $router->get('/logout', 'Admin\LoginController@logout');
    $router->get('/login/action', 'Admin\LoginController@action');

    $router->group(['middleware'=>['admin']], function ($router) {
        $router->get('/', 'Admin\IndexController@index');

        $router->group(['prefix' => '/user'], function ($router) {
            $router->get('/', 'Admin\UserController@index');
            $router->get('/address/{id}', 'Admin\UserController@address');
        });

        $router->group(['prefix' => '/goods'], function ($router) {
            $router->get('/', 'Admin\GoodsController@index');

            $router->get('/create', 'Admin\GoodsController@create');
            $router->post('/create/action', 'Admin\GoodsController@createAction');

            $router->get('/update/{id}', 'Admin\GoodsController@update');
            $router->post('/update/action', 'Admin\GoodsController@updateAction');

            $router->get('/delete/{id}', 'Admin\GoodsController@delete');
        });

        $router->group(['prefix' => '/order'], function ($router) {
            $router->get('/', 'Admin\OrderController@index');
            $router->get('/fh/{id}', 'Admin\OrderController@fh');
            $router->get('/sd/{id}', 'Admin\OrderController@sd');

        });

        $router->group(['prefix' => '/category'], function ($router) {
            $router->get('/', 'Admin\CategoryController@index');
            $router->get('/c/{id}', 'Admin\CategoryController@c');

        });
    });

});
