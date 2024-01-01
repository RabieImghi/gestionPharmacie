<?php
namespace App\Controllers;
use App\models\Vent;
use App\Controller;
require_once "dompdf/autoload.inc.php";
use Dompdf\Dompdf;

class  VentController{
    public function addVent(){	
        $vent = new Vent();
        $res=$vent->addVent($_POST);
        var_dump($res);
    }
    public function getAllVents(){
        $Vent = new Vent();
        $data['vents'] = $Vent->getAllVents();
        Controller::render('admin/vent',$data);
    }
    public function rapportVent(){
        $Vent = new Vent();
        $data['vents'] = $Vent->getAllVents();
        Controller::render('admin/ventRapport',$data);
        $dompdf=new Dompdf();
        $dompdf->loadHtml($_SESSION['rapportVent']);
        $dompdf->setPaper('A4','lnandscape');
        $dompdf->render(); 
        $dompdf->stream();
        Controller::render('admin/vent',$data);
        
        
    }
}