<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\WargaController;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return "<p>+--------+---------------------------+------------+--------------------------------------+---------+------------+</p>

    <p>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;Verb&nbsp;&nbsp;&nbsp;|&nbsp;Path&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;NamedRoute&nbsp;|&nbsp;Controller&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;Action&nbsp;&nbsp;|&nbsp;Middleware&nbsp;|</p>
    
    <p>&nbsp;&nbsp;&nbsp;&nbsp;+--------+---------------------------+------------+--------------------------------------+---------+------------+</p>
    
    <p>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;GET&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;None&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;Closure&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</p>
    
    <p>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;GET&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;/api/warga&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;App\Http\Controllers\WargaController&nbsp;|&nbsp;index&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</p>
    
    <p>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;GET&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;/api/warga/{warga}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;App\Http\Controllers\WargaController&nbsp;|&nbsp;show&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</p>
    
    <p>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;POST&nbsp;&nbsp;&nbsp;|&nbsp;/api/warga&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;App\Http\Controllers\WargaController&nbsp;|&nbsp;store&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</p>
    
    <p>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;POST&nbsp;&nbsp;&nbsp;|&nbsp;/api/warga/{warga}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;App\Http\Controllers\WargaController&nbsp;|&nbsp;update&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</p>
    
    <p>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;DELETE&nbsp;|&nbsp;/api/warga/{warga}/delete&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;App\Http\Controllers\WargaController&nbsp;|&nbsp;destroy&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|</p>
    
    <p>&nbsp;&nbsp;&nbsp;&nbsp;+--------+---------------------------+------------+--------------------------------------+---------+------------+</p>
    ";
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('warga/', ['uses' => 'WargaController@index']);
    $router->get('warga/{warga}', ['uses' => 'WargaController@show']);
    $router->post('warga/', ['uses' => 'WargaController@store']);
    $router->post('warga/{warga}', ['uses' => 'WargaController@update']);
    $router->delete('warga/{warga}/delete', ['uses' => 'WargaController@destroy']);
});
