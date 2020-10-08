<?php
namespace Core;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

class Database {
    /**
     * var Capsule
     */
    public $capsule;

    public function __construct(Capsule $capsule)
    {
        $this->capsule = $capsule;
        $this->setConnection();

        // Make this Capsule instance available globally via static methods... (optional)
        $this->capsule->setAsGlobal();
    }
    
    public function setConnection()
    {
        $config_db = require_once( __DIR__ . '/../config/database.php');
        $this->capsule->addConnection($config_db);
    }
}