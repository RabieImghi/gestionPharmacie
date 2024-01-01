<?php

namespace App;
use App\Controllers\HomeController;

class Router {
    public $routes = [];

    private function addRoute($route, $controller, $action, $method) {

        $this->routes[$method][$route] = ['controller' => $controller, 'action' => $action];
    }

    public function get($route, $controller, $action) {
        $this->addRoute($route, $controller, $action, "GET");
    }

    public function post($route, $controller, $action) {
        $this->addRoute($route, $controller, $action, "POST");
    }

    public function dispatch() {
        $uri = strtok($_SERVER['REQUEST_URI'], '?');
        $method =  $_SERVER['REQUEST_METHOD'];

        if (array_key_exists($uri, $this->routes[$method])) {
            $controller = $this->routes[$method][$uri]['controller'];
            $actions = explode('/', $this->routes[$method][$uri]['action']);
            $action=$actions[0];
            $controller = new $controller();
            if(isset($actions[1]))
                $controller->$action($actions[1]);
            else $controller->$action();
        } else {
            $controller = new HomeController();
            $controller->errorPage();
        }
    }
}
