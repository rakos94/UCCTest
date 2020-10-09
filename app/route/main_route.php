<?php

use App\Controller\VehicleController;
use App\Core\Router;

/**
 * Create a new router instance.
 */
$router = new Router($_SERVER);

/**
 * @var Jenssegers\Blade\Blade
 */
$blade = $app->blade;

/**
 * Add a "hello" route that prints to the screen.
 */
$controller = new VehicleController;
$controller->setBlade($blade);

$router->addRoute('', $controller->index());

$router->addRoute('create', $controller->post());

/**
 * Run it!
 */
$router->run();