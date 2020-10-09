<?php

namespace App\Migrations;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class EngineDisplacementTypeTable extends BaseMigration {
    
    public $tableName = 'engine_displacement_type';

    public function up(){
        Capsule::schema()->create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->timestamps();
        });
    }
}