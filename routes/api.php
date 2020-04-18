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
    $router->match(['get', 'put'],'/register',"Api\LoginController@register");
    $router->match(['get', 'put'],'/login',"Api\LoginController@login");

    $router->group(['middleware'=>['user']], function ($router) {


    });
});
