<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$router->group(['prefix' => ''], function ($router) {
    $router->get('/register',"LoginController@register");
    $router->get('/login',"LoginController@login");

    $router->group(['middleware'=>['user']], function ($router) {


    });
});
