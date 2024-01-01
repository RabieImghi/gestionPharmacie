<?php
namespace App\Controllers;
use App\Models\RapportVent;
use App\Models\RapportStock;
use App\Controller;
require_once "dompdf/autoload.inc.php";
use Dompdf\Dompdf;

class  RapportController{
   
    public function rapportVent(){
        $vent= new RapportVent();
        $data['vents']=$vent->getAllVents();
        Controller::render('admin/ventRapport',$data);
        $dompdf=new Dompdf();
        $dompdf->loadHtml($_SESSION['rapportVent']);
        $dompdf->setPaper('A4','lnandscape');
        $dompdf->render();
        $filename = 'vent_rapport_' . date('Y-m-d') . '.pdf'; 
        $dompdf->stream($filename);
        Controller::render('admin/vent',$data);
    }
    public function rapportStock(){
        $stock= new RapportStock();
        $data['medicament']=$stock->getAllMedicament();
        Controller::render('admin/StockRapport',$data);
        $dompdf=new Dompdf();
        $dompdf->loadHtml($_SESSION['rapportVent']);
        $dompdf->setPaper('A4','lnandscape');
        $dompdf->render();
        $filename = 'vent_rapport_' . date('Y-m-d') . '.pdf'; 
        $dompdf->stream($filename);
        Controller::render('admin/vent',$data);
    }
}