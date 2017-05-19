<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Routing\ControllerDispatcher;
use Illuminate\Routing\Route;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function handle($slug1, $slug2 = null)
    {
        $controller = DefaultController::class;
        $action = 'index';

        if ($slug1 == 'something') {
            $controller = SomeController::class;
            $action = 'myAction';
        }

        $container = app();
        $route = $container->make(Route::class);
        $controllerInstance = $container->make($controller);

        return (new ControllerDispatcher($container))->dispatch($route, $controllerInstance, $action);
    }
}
