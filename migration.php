<?php

require __DIR__ . '/vendor/autoload.php';

$app = new App\Core\App;

switch ($argv[1]) {
    case 'up':
        $app->MigrationUp();
        break;
    case 'down':
        $app->MigrationDown();
        break;
    
    default:
        # code...
        break;
}
