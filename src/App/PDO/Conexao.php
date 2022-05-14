<?php
namespace App\PDO;
final class Conexao{
    static $conexao;
    public static function conectar()
    {
        if (!isset(self::$conexao)) {
            self::$conexao = new \PDO("mysql:host=" . getenv("HOST") . ";dbname=" . getenv("DB") . ";charset=utf8", getenv("USER"), getenv("PASSWORD"));
            self::$conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
        return self::$conexao;
    }
}