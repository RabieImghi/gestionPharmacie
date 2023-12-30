<?php 
namespace App\Controllers;
use App\Controller;
Class LoginController{
    public function index(){
        Controller::render("login/index");
    }
}