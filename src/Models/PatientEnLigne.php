<?php
namespace App\models;
use App\models\Authenticatable;
use App\models\Patient;

Class PatientEnLigne extends Patient implements Authenticatable{
    public function registerUser($data) {
        parent::registerUser($data);
    }
    public function loginUser($data) {
        return parent::loginUser($data);
    }
}