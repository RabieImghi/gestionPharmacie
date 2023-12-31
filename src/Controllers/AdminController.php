<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Admin;

class AdminController {
    public function GestionUtilisateur() {
        $data['listUsers']= Admin::GestionUtilisateur();
        Controller::render('admin/user',$data);   
    }
    
}
