<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
    return $router->app->version();
});

// $router->post('/registrasi',['user' => 'RegistrasiController@registrasi']);
$router->post('/registrasi','RegistrasiController@registrasi');
$router->post('/login','LoginController@login');
$router->post('/booking','BookingController@create');
$router->get('/booking','BookingController@read');

