<?php
namespace App\models;
use App\Models\User;
interface Authenticatable{
    public function registerUser($data);
    public function loginUser($data);
}