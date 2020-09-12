<?php

namespace application\core;


class Router
{
    private array $params;

    public function run(): void
    {
        if ($this->match()) {
            $path = 'application\controllers\\' . ucfirst($this->params['controller']) . 'Controller';
            $action = $this->params['action'];
            if (class_exists($path) && method_exists($path, $action)) {
                $controller = new $path($this->params);
                $controller->$action();
            } else {
                View::errorCode(404);
            }
        }
        else {
            View::errorCode(404);
        }
    }

    private function match(): bool
    {
        $routes = require_once 'application/config/routes.php';
        $currentRoute = trim($_SERVER['REQUEST_URI'], '/');

        foreach ($routes as $route => $value) {
            if (preg_match('%^' . $route . '$%', $currentRoute)) {
                $this->params = $value;
                return true;
            }
        }
        return false;
    }
}