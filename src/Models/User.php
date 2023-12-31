<?php
namespace App\models;
use App\models\Database;
use PDO;
Class User implements Authenticatable{

    public function loginUser($data){
        extract($data);
        $db = Database::connect();
        $stmt=$db->prepare("SELECT * FROM user WHERE email=? AND password=?");
        $newPassHash=MD5($password);
        $result=$stmt->execute([$email,$newPassHash]);
        $numRows = $stmt->rowCount();
        if($result && $numRows>0){
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        }
    }
    public function registerUser($data){
        extract($data);
        $db = Database::connect();
        $stmt=$db->prepare("INSERT INTO user (username,email,password,role) VALUES (?,?,?,?)");
        $newPassHash=MD5($password);
        $role="patient_en_lign";
        $stmt->execute([$username,$email,$newPassHash,$role]);
        return $stmt;
    }

}