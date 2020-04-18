<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Api Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Api routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your Api!
|
*/

$router->group(['prefix' => ''], function ($router) {
    $router->get('/register',"Api\LoginController@register");
    $router->get('/login',"Api\LoginController@login");

    $router->group(['middleware'=>['user']], function ($router) {
        $router->group(['prefix' => '/goods'], function ($router) {
            $router->get('/list/{id}',"Api\GoodsController@list");
            $router->get('/search/{name}',"Api\GoodsController@search");
            $router->get('/get/{id}',"Api\GoodsController@get");
            $router->get('/get/{id}',"Api\GoodsController@get");


            $router->get('/collect/{user_id}/{goods_id}',"Api\GoodsController@collect");
            $router->get('/collect/action/{id}/{goods_id}/{status}',"Api\GoodsController@collectAction");


            $router->get('/cart/add/{user_id}/{goods_id}',"Api\GoodsController@addCart");

        });

    });

    $router->group(['prefix' => '/cart'], function ($router) {
        $router->get('/list/{user_id}',"Api\CartController@list");
        $router->get('/delete/{user_id}/{goods_id}',"Api\CartController@delete");
    });

    $router->group(['prefix' => '/address'], function ($router) {
        $router->get('/get/{id}',"Api\AdressController@get");
        $router->get('/add',"Api\AdressController@add");
        $router->get('/delete/{user_id}/{goods_id}',"Api\CartController@delete");
    });

});
