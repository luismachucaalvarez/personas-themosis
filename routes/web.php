<?php

/**
 * Application routes.
 */
Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function(){
    return view('test');
});