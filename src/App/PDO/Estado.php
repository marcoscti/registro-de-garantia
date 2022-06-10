<?php

namespace App\PDO;

use App\PDO\Sql;

class Estado
{
    public function getEstados()
    {
        return Sql::getList("SELECT uf_id,uf_nome FROM tb_uf ORDER BY uf_nome");
    }

    public function getCidades($idCidade)
    {
        $result = Sql::findData("SELECT id_city,cidade_nome FROM tb_city WHERE uf_id = ? ORDER BY cidade_nome ASC", [$idCidade]);
        return $result;
    }

    public static function getCidade($usuCidadeId){
        $result = Sql::findData("SELECT id_city,cidade_nome FROM tb_city WHERE id_city = ?",[$usuCidadeId]);
        return $result[0];
    }
    public static function getEstado($usuUfId){
        $result = Sql::findData("SELECT id_city,cidade_nome FROM tb_uf WHERE uf_id = ?",[$usuUfId]);
        return $result[0];
    }
}