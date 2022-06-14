<?php

namespace App\PDO;

use App\PDO\Conexao;

class Sql
{
    public static function setData($sql, $dados)
    {
        try {
            $stm = Conexao::conectar()->prepare($sql);
            return $stm->execute($dados);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public static function getList($sql)
    {
        try {
            $stm = Conexao::conectar()->query($sql);
            return $stm->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    public static function findData($sql, $data)
    {
        try {
            $stm = Conexao::conectar()->prepare($sql);
            $stm->execute($data);
            return $stm->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
