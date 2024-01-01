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
    public function getVents(){
        $Vent = new Vent();
        $data['vents'] = $Vent->getAllVents();
        return $data;
    }
    public function getAllVents(){
        $data=$this->getVents();
        Controller::render('admin/vent',$data);
    }
}