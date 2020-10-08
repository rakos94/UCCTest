<?php
namespace Core;

use DI\Container;
use Exception;

class App {
    
    /**
     * @var Database
     */
    public $database;
    
    /**
     * @var Migration
     */
    public $migration;

    public function __construct()
    {
        $container = new Container();
        // $database = $container->get('Database');

        $this->database = $container->make(Database::class);
        $this->migration = $container->make(Migration::class);


        
        // print_r($database->capsule);
         
        // Set the event dispatcher used by Eloquent models... (optional)
        // $this->capsule->setEventDispatcher(new Dispatcher(new Container));
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
}