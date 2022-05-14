<?php
namespace App\Controllers;
use App\Controllers\MainController;

class LoginController extends MainController{
    public static function login(){
        $title = "Faça Login";
        include "./public/layout/header.php";
        include "./public/view_login.php";
        include "./public/layout/footer.php";
    }
    public static function forgout(){
        $title = "Esqueci a Senha";
        include "./public/layout/header.php";
        include "./public/view_forgout_password.php";
        include "./public/layout/footer.php";
    }
}