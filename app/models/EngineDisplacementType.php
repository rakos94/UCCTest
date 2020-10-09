<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EngineDisplacementType extends Model
{
    public $table = 'engine_displacement_type';

    public $fillable = ['code'];
}