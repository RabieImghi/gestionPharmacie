<?php

namespace App;

class Controller
{
    public static function render($view, $data = []){
        extract($data);
        include "../views/$view.php";
    }
}
