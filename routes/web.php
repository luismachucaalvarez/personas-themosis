<?php

/**
 * Application routes.
 */
/*Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function(){
    return view('test');
});*/

use Themosis\Support\Facades\Route;

//Route::get('/', 'PageController@index');
Route::get('archive', 'PageController@archive');
Route::get('single', 'PageController@single');