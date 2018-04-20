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

//$router->get('/', function () use ($router) {
//    return view('index.html');
//});

$router->get('/', function() {
    return view('contacts');
});


$router->get('api/contacts', 'ContactController@get');
$router->get('api/contacts/{id}', 'ContactController@find');
$router->post('api/contacts', 'ContactController@create');
$router->post('api/contacts/delete{id}', 'ContactController@delete');
$router->put('api/contacts{id}', 'ContactController@update');
$router->delete('api/contacts{id}', 'ContactController@delete');