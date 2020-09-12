<?php

declare(strict_types=1);

use application\core\Router;

ini_set('display_errors', '1');
error_reporting(E_ALL);

require_once 'application/lib/autoload.php';

$router = new Router();
$router->run();
