<?php
namespace App\Controllers;
use App\models\Medicament;
use App\Controller;
class  MedicamentController{
    public function getMedicament($test){
        $medicament = new Medicament();
        $data['medicament'] = $medicament->allMedicament();
        if($test=='admin')
        Controller::render('admin/medicament',$data);
        if($test=='user')
        Controller::render('user/products',$data);
    }
}