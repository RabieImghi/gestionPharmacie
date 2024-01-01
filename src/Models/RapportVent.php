<?php
namespace App\models;
use App\models\Vent;
Class RapportVent extends Rapport{
    public function getAllVents(){
        $vents = new Vent();
        return $vents->getAllVents();
    }
}