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

Route::get('/', function () {
   echo " welcome ";
});

$router->group(['prefix' => '/admin'], function ($router) {
    $router->get('/test', function () {
        return 999;
    });
});

$router->group(['prefix' => '/api'], function ($router) {
    $router->get('/test', function () {
        return 999;
    });


});
