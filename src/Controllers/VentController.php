<?php
namespace App\Controllers;
use App\models\Vent;
use App\Controller;
class  VentController{
    public function addVent(){	
        $vent = new Vent();
        $res=$vent->addVent($_POST);
        var_dump($res);
    }
    public function getAllVents(){
        
    }
}