<?php

namespace App\Controllers;

use App\Controller;

class HomeController {
    public function index($data=[]) {
        if(isset($_SESSION['role_user'])){
            if($_SESSION['role_user']=="admin")
            Controller::render('admin/index',$data);
            if($_SESSION['role_user']=="patient_en_lign") 
            Controller::render('user/index',$data);
        }else Controller::render('user/index',$data);   
    }
    
    public function errorPage(){
        Controller::render('error404');
    }
}
