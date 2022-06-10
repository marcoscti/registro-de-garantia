<?php
namespace App\PDO;

class Nivel{
    public function getList(){
        $sql = "SELECT usu_nivel_id,usu_nivel_desc FROM tb_usu_nivel";
        $result = Sql::getList($sql);
        return $result;
    }
}