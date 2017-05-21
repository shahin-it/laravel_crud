<?php
/**
 * Created by IntelliJ IDEA.
 * User: mbstu
 * Date: 19-May-17
 * Time: 8:52 PM
 */
function forward($controller = '/', $action = 'index', $params = array()) {
    $ctr = app()->make('\App\Http\Controllers\\'.ucfirst($controller).'Controller');
    $request = \Illuminate\Http\Request::capture();
    return $ctr->callAction($action, $params);
}