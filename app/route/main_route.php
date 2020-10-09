<?php

use App\Core\Router;
use App\Models\EngineDisplacementType;
use App\Models\Vehicle;

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
$router->addRoute('', function() use ($blade) {
    $vehicles = Vehicle::get();
    $type = EngineDisplacementType::get();
    echo $blade->make('index',['vehicles' => $vehicles, 'type' => $type])->render();
});

$router->addRoute('create', function() {

    $create = Vehicle::create([
        'name'                  => $_REQUEST['name'],
        'engine_displacement'   => $_REQUEST['engine_displacement'],
        'engine_displacement_code'   => $_REQUEST['engine_displacement_code'],
        'engine_power'          => $_REQUEST['engine_power'],
        'price'                 => $_REQUEST['price'],
        'location'              => $_REQUEST['location'],
    ]);

    // print($create->toJson());

    if($create) header('Location: /');
    
});

/**
 * Run it!
 */
$router->run();