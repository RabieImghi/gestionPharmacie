<?php
namespace App\Controllers;
use App\Models\RapportVent;
use App\Models\RapportStock;
use App\Controller;
require_once "dompdf/autoload.inc.php";
use Dompdf\Dompdf;

class  RapportController{
    public function generateRapport($Model,$action,$dataName,$view,$randerView){
        $allData= new $Model();
        $data[$dataName]=$allData->$action();
        Controller::render('admin/'.$view,$data);
        $dompdf=new Dompdf();
        $dompdf->loadHtml($_SESSION['rapportVent']);
        $dompdf->setPaper('A4','lnandscape');
        $dompdf->render();
        $filename =$view.'_'. date('Y-m-d') . '.pdf'; 
        $dompdf->stream($filename);
        Controller::render('admin/'.$randerView,$data);
    }
    public function rapportVent(){
        $this->generateRapport(RapportVent::class,'getAllVents','vents','ventRapport','vent');
    }
    public function rapportStock(){
        $this->generateRapport(RapportStock::class,'getAllMedicament','medicament','StockRapport','medicament');
    }
  
}