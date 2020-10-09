<?php

namespace App\Migrations;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class VehicleTable extends BaseMigration{
    
    public $tableName = 'vehicle';

    public function up(){
        Capsule::schema()->create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('engine_displacement');
            $table->string('engine_displacement_code');
            $table->string('engine_power');
            $table->integer('price');
            $table->string('location');
            $table->timestamps();
        });
    }
}