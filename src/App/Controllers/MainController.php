<?php
namespace App\Controllers;
abstract class MainController{
    
    public static function redirect($to = ""){
        if(!empty($to)){
            header("location:/$to");
        }else{
            header("location:index.php");
        }
    }
}