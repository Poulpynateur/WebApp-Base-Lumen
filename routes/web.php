<?php

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

$router->get('/', ['as' => 'home', 'uses' => 'HomeController@show']);

$router->post('/auth/register', 'AuthController@postRegister');
$router->post('/auth/login', 'AuthController@postLogin');

$router->get('/auth/login', ['as' => 'login', 'uses' => 'AuthController@login']);


$router->group(['middleware' => 'auth:api'], function($router)
{
    $router->get('/test', function() {
        return response()->json([
            'message' => 'Hello World!'
        ]);
    });
});