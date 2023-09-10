<?php

declare(strict_types=1);

use \Mvc\Controller\{
    Controller,
    DeleteVideoController,
    EditVideoController,
    Error404Controller,
    NewVideoController,
    VideoFormController,
    VideoListController
};
use Mvc\Repository\VideoRepository;
use Mvc\Infrastructure\Persistence\ConnectionCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$videoRepository = new VideoRepository($connection);

$routes = require_once __DIR__ . '/../config/routes.php';

$pathInfo = $_SERVER['PATH_INFO'] ?? '/';
$httpMethod = $_SERVER['REQUEST_METHOD'];

$key = "$httpMethod|$pathInfo";
if (array_key_exists($key, $routes)) {
    $controllerClass = $routes["$httpMethod|$pathInfo"];
    $controller = new $controllerClass($videoRepository);
} else {
    $controller = new Error404Controller();
}
/** @var Controller $controller */
$controller->requestProcess();