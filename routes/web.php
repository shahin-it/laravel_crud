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
    $ctr = app()->make('\App\Http\Controllers\\'.ucfirst($controller).'Controller');
    return $ctr->callAction("index", array());
});

Route::get('{controller}/{action}', function($controller, $action = 'index') {
    $ctr = app()->make('\App\Http\Controllers\\'.ucfirst($controller).'Controller');
    return $ctr->callAction($action, array());
});

Route::get('{controller}/{action}/{id}', function($controller, $action = 'index', $id = null) {
    $ctr = app()->make('\App\Http\Controllers\\'.ucfirst($controller).'Controller');
    return $ctr->callAction($action, array('id'=> $id));
});