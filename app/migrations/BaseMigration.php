<?php

namespace App\Migrations;

use Illuminate\Database\Capsule\Manager as Capsule;

class BaseMigration {
    public $tableName;

    public function up(){}

    public function run(){
        try {
            $this->up();
            print "\e[32m". "Create " . class_basename($this) . "\e[0m \n";
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function down(){
        Capsule::schema()->dropIfExists($this->tableName);
    }
}