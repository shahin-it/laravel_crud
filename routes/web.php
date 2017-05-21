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
    return view('welcome');
});

Route::get('/{controller}', function($controller) {
    return forward($controller);
});

Route::get('{controller}/{action}', function($controller, $action = 'index') {
    return forward($controller, $action);
});

Route::get('{controller}/{action}/{id}', function($controller, $action = 'index', $id = null) {
    return forward($controller, $action, array($id));
});