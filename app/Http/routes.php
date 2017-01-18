<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/page', function() {
    echo '<pre>';
    //print_r($_ENV);
    //echo config('app.locale');
    //echo Config::set('app.locale', 'ru');
    //echo Config::get('app.locale');
    //echo env('APP_ENV');

    echo '<pre>';
});

/*
Route::post('/comments', function () {
    echo 'wefw';
    print_r($_POST);
});
*/
/*
Route::match(['get','post'], '/comments', function () {
    echo 'wefw';
    print_r($_POST);
    return;
});
*/
Route::any('/comments', function () {
    echo 'wefw';
    print_r($_POST);
    return;
});