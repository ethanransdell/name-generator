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

$router->get('', function () {
    return view('Frontend.frontend');
});

$router->get('/name/full[/{count}]', 'GetNameController');

$router->get('/dwarves', function(){
	return view('dwarf.generator');
})
