<?php
namespace App\models;
use App\models\Database;
use App\models\Medicament;
use PDO;
Class Vent {
    protected $Medicament = new Medicament;
    public function addVent($data){	
        extract($data);
        $db = Database::connect();
        $currentDate = date("Y-m-d");
        $type='en_lign';
        $stmt=$db->prepare("INSERT INTO vente (med_id,date,user_id,type,medicament) VALUES (?,?,?,?)");
        $stmt->execute([$idMed,$currentDate,$idUser,$type]);
        return $stmt;
    }

}