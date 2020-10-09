<?php
namespace App\Core;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

class Database {
    /**
     * var Capsule
     */
    private $capsule;

    public function __construct(Capsule $capsule)
    {
        $this->capsule = $capsule;

        // Make this Capsule instance available globally via static methods... (optional)
        $this->capsule->setAsGlobal();
        
        // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
        $this->capsule->bootEloquent();
    }
    
    public function getCapsule() : Capsule
    {
        return $this->capsule;
    }

    public function setConnection($conn)
    {
        $this->capsule->addConnection($conn);
    }
}