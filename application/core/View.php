<?php


namespace application\core;


class View
{
    protected string $path;

    public string $layout = 'default';

    public function __construct(array $route)
    {
        $this->path = $route['controller'] . '/' . $route['action'];
    }

    public function render(string $title, array $vars = []): void
    {
        extract($vars);
        $path = "application/views/$this->path.php";
        if (file_exists($path)) {
            ob_start();
            require_once $path;
            $content = ob_get_clean();
            require_once 'application/views/layouts/' . $this->layout . '.php';
        }
    }

    public function getComponent(array $vars = []) {
        extract($vars);
        $path = "application/views/$this->path.php";
        if (file_exists($path)) {
            require_once $path;
        }
    }

    static public function errorCode(int $value): void
    {
        http_response_code($value);
        require_once 'application/views/errors/' . $value . '.php';
        die();
    }

    public function redirect(string $url): void
    {
        header('location: /' . $url);
        die();
    }
}