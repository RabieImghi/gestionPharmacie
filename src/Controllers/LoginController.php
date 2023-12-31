<?php 
namespace App\Controllers;
use App\Controller;
use App\Controllers\HomeController;
use App\models\PatientEnLigne;
Class LoginController{
    public function index(){
        Controller::render('login/index');
    }
    public function loginUser(){
        $patient= new PatientEnLigne();
        $reult = $patient->loginUser($_POST);
        $_SESSION['user_id']= $reult["user_id"];
        $_SESSION['role_user']= $reult["role"];
        $homeControle= new HomeController();
        $homeControle->index();        
    }
    public function registerUser(){
        $patient= new PatientEnLigne();
        $patient->registerUser($_POST);
        Controller::render('login/index');
    }
    public function logoutUser(){
        session_destroy();
        Controller::render('user/index');
    }
}