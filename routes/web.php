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

$router->get('/', function () use ($router) {
    return view('email_form');
});



$router->post('/fullcontact/email/','FullContactController@getInfoFromEmail');
$router->get('/instagram/username/{username}','InstagramController@getInfoFromUsername');
$router->get('/facebook/id/{id}','FacebookController@getInfoFromID');