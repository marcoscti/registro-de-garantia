<?php

namespace App\PDO;

use App\PDO\Sql;

class Estado
{
    public function getEstados()
    {
        return Sql::getList("SELECT * FROM uf ORDER BY uf_nome");
    }

    public function getCidades($idCidade)
    {
        $result = Sql::findData("SELECT * FROM cidade WHERE cidade.uf_uf_id = ? ORDER BY cidade_nome ASC", [$idCidade]);
        return $result;
    }
}
