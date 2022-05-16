<?php
namespace App\PDO;

class Nivel{
    public function getList(){
        $sql = "SELECT usuNivel_id,usuNivel_desc FROM usunivel";
        $result = Sql::getList($sql);
        return $result;
    }
}