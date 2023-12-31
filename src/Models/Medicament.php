<?php
namespace App\models;
use App\models\Database;
use PDO;
Class Medicament{
    public function allMedicament(){
        $db = Database::connect();
        $stmt=$db->prepare("SELECT * FROM medicament");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}