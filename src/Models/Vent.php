<?php
namespace App\models;
use App\models\Database;
use App\models\Medicament;
use PDO;
Class Vent {
    public function addVent($data){	
        extract($data);
        $db = Database::connect();
        $currentDate = date("Y-m-d");
        $type='en_lign';
        $stmt=$db->prepare("INSERT INTO vente (med_id,date,user_id,type) VALUES (?,?,?,?)");
        $stmt->execute([$idMed,$currentDate,$idUser,$type]);
        return $stmt;
    }
    public function getAllVents(){
        $db = Database::connect();
        $stmt=$db->prepare("SELECT * FROM user NATURAL JOIN vente NATURAL JOIN medicament");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

}