<?php


namespace application\core;

use application\core\View;

abstract class Controller
{
    protected object $view;

    protected object $model;

    public function __construct(array $route)
    {
        $path = 'application\models\\' . ucfirst($route['controller']);
        $this->model = new $path;
        $this->view = new View($route);
    }
}