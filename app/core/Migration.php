<?php

namespace App\Core;

use App\Migrations\BaseMigration;

class Migration {

    private $tableClass = [
        'EngineDisplacementTypeTable',
        'VehicleTable'
    ];

    public function up(){
        foreach ($this->tableClass as $key => $value) {
            $migration = $this->createClassName($value);
            $migration->run();
        }
    }

    public function down(){
        foreach ($this->tableClass as $key => $value) {
            $migration = $this->createClassName($value);
            $migration->down();
        }
    }

    private function createClassName($value) : BaseMigration
    {
        $className = "\\App\\Migrations\\" . $value;
        return new $className;
    }
}