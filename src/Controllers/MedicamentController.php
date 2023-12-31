<?php
namespace App\Controllers;
use App\models\Medicament;
use App\Controller;
class  MedicamentController{
    public function getMedicament(){
        $medicament = new Medicament();
        $data['medicament'] = $medicament->allMedicament();
        Controller::render('user/products',$data);
    }
}