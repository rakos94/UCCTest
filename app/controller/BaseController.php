<?php
namespace App\Controller;

class BaseController {
    
    protected $blade;

    public function setBlade($blade)
    {
        $this->blade = $blade;
    }

}