<?php
namespace App\Controller;

use App\Models\EngineDisplacementType;
use App\Models\Vehicle;

class VehicleController extends BaseController{

    public function index()
    {
        $vehicles = Vehicle::get();
        $type = EngineDisplacementType::get();
        $res = print $this->blade->make('index',['vehicles' => $vehicles, 'type' => $type])->render();
        return $res;
    }
    
    public function post()
    {
        return function(){
            
            $create = Vehicle::create([
                'name'                  => $_REQUEST['name'],
                'engine_displacement'   => $_REQUEST['engine_displacement'],
                'engine_displacement_code'   => $_REQUEST['engine_displacement_code'],
                'engine_power'          => $_REQUEST['engine_power'],
                'price'                 => $_REQUEST['price'],
                'location'              => ucfirst($_REQUEST['location']),
            ]);
            if($create) header('Location: /');
        };
    }
}