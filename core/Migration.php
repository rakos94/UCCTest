<?php

namespace Core;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class Migration {

    private $tableName = 'vehicle';

    public function up(){
        Capsule::schema()->create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('engine_displacement');
            $table->string('engine_power');
            $table->integer('price');
            $table->string('location');
            $table->timestamps();
        });
    }

    public function down(){
        Capsule::schema()->dropIfExists($this->tableName);
    }
}