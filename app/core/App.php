<?php
namespace App\Core;

use App\Seeder\BaseSeeder;
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
     * @var BaseSeeder
     */
    public $seeder;

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
        $this->setupEnv();
        $container = new Container();
        $this->database = $container->get(Database::class);
        $this->migration = $container->get(Migration::class);
        $this->seeder = $container->get(BaseSeeder::class);
        $this->setupDB();
        $this->InitBlade();
    }

    private function setupEnv()
    {
        $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
        $dotenv->load();
    }

    private function setupDB()
    {
        $config_db = include('../config/database.php');
        $this->database->setConnection($config_db);
    }

    public function MigrationUp()
    {
        try {
            $this->migration->up();
            $this->seeder->run();
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