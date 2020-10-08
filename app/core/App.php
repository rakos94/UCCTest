<?php
namespace App\Core;

use DI\Container;
use Exception;
use Jenssegers\Blade\Blade;

class App {
    
    /**
     * @var Database
     */
    public $database;
    
    /**
     * @var Migration
     */
    public $migration;

    /**
     * @var Route
     */
    public $route;

    /**
     * @var Blade
     */
    public $blade;

    public function __construct()
    {
        $container = new Container();

        $this->database = $container->get(Database::class);
        $this->migration = $container->get(Migration::class);
        $this->InitBlade();
    }

    public function MigrationUp()
    {
        try {
            $this->migration->up();
            echo 'Success';
        } catch (Exception $e){
            echo 'Fail';
        }
    }
    
    public function MigrationDown()
    {
        try {
            $this->migration->down();
            echo 'Success';
        } catch (Exception $e){
            echo 'Fail';
        }
    }

    public function InitBlade()
    {
        $views = __DIR__ . '/../../resources/views';
        $cache = __DIR__ . '/../../resources//cache';
        $this->blade = new Blade($views, $cache);
    }
}