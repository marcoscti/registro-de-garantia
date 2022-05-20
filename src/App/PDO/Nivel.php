<?php
namespace App\PDO;

class Nivel{
    public function getList(){
        $sql = "SELECT usuNivel_id,usuNivel_desc FROM usuNivel";
        $result = Sql::getList($sql);
        return $result;
    }
}