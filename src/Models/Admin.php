<?php
namespace App\models;
use App\models\Database;
use PDO;
Class Admin extends User{
    public static function GestionUtilisateur(){
        $db = Database::connect();
        $stmt=$db->prepare("SELECT * FROM user");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}