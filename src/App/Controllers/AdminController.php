<?php
namespace App\Controllers;

use App\PDO\Pessoa;

class AdminController{
    public static function viewAdminDashboard(){
        $title = "Dashboard";
        include_once "./public/layout/header.php";
        include_once "./public/layout/nav_superior.php";
        include_once "./public/layout/nav_left.php";
        include_once "./public/view_admin_dashboard.php";
        include_once "./public/layout/footer.php";
    }
    public static function viewAddUser(){
        $title = "Dashboard";
        include_once "./public/layout/header.php";
        include_once "./public/layout/nav_superior.php";
        include_once "./public/layout/nav_left.php";
        include_once "./public/view_admin_add_user.php";
        include_once "./public/layout/footer.php";
    }
    public static function mydata(){
        $title = "Meus dados";
        include_once "./public/layout/header.php";
        include_once "./public/layout/nav_superior.php";
        include_once "./public/layout/nav_left.php";
        include_once "./public/view_admin_my_data.php";
        include_once "./public/layout/footer.php";
    }
    public static function getRegistros(){
        $title = "Meus dados";
        $pessoa= new Pessoa();
        $cliente = $pessoa->getProspects([7,2]);
        include_once "./public/layout/header.php";
        include_once "./public/layout/nav_superior.php";
        include_once "./public/layout/nav_left.php";
        include_once "./public/view_admin_list_garantia.php";
        include_once "./public/layout/footer.php";
    }
    public static function login($data){
        //Aqui vai a lógica do login
        
            $data = $_SESSION['logado'] = true;
            return $data;
    }
}