<?php

use App\Core\Router;
use App\Models\Vehicle;
use Jenssegers\Blade\Blade;

/**
 * Create a new router instance.
 */
$router = new Router($_SERVER);
$blade = $app->blade;

/**
 * Add a "hello" route that prints to the screen.
 */
$router->addRoute('', function() use ($blade) {
    $vehicles = Vehicle::get();
    echo $blade->make('index',['vehicles' => $vehicles])->render();
});

$router->addRoute('/create', function() {
    // require ROOT .'/views/index.php';
});

/**
 * Run it!
 */
$router->run();