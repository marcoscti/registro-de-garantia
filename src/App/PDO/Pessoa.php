<?php

namespace App\PDO;

use App\PDO\Sql;

/**
 * @class: Pessoa
 * @autor: marcoscti
 */
class Pessoa
{
    /**
     * Insere um usuário com perfil de revendedor na base e retorna o ID gerado
     * status_status_id, usuNivel_usuNivel_id, cidade_cidade_id, uf_uf_id,usu_nome, usu_nome2, usu_email, usu_cpf, usu_ddd, usu_tel, usu_refRel, usu_numNf
     */
    public function setRevendedor(array $data)
    {
        $sql = "INSERT INTO usu (status_status_id, usuNivel_usuNivel_id, cidade_cidade_id, uf_uf_id,usu_nome, usu_nome2, usu_email, usu_cpf, usu_ddd, usu_tel, usu_refRel, usu_numNf) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        Sql::setData($sql, $data);
        $result = Conexao::conectar()->lastInsertId();
        return $result;
    }
    /**
     * Insere um cliente no banco
     */
    public function setCliente($data)
    {

        $sql = "INSERT INTO usu (status_status_id, usuNivel_usuNivel_id, cidade_cidade_id, uf_uf_id,usu_nome, usu_nome2, usu_email, usu_cpf, usu_ddd, usu_tel,usu_dataCompra,usu_rev_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        return Sql::setData($sql, $data);
    }
     /**
     * Insere um cliente no banco
     */
    public function setUsuario($data)
    {
        $sql = "INSERT INTO usu (usuNivel_usuNivel_id,usu_nome, usu_nome2, usu_email) VALUES (?,?,?,?)";
        return Sql::setData($sql, $data);
    }
    /**
     * Atualiza um perfil de usuário
     */
    public function updateProfile($data)
    {
        $sql = "UPDATE usu SET usu_nome=?,usu_nome2=?,usu_senha=? WHERE usu_id=?";
        return Sql::setData($sql, $data);
    }
    /**
     * Retorna um usuário pelo id do nível de acesso e id do status passando um array
     * EX: getProspects([2,7])
     * @param $data
     * @return array
     */
    public function getProspects(array $data)
    {
        $sql = "SELECT * FROM usu WHERE usuNivel_usuNivel_id = ? AND status_status_id = ? ORDER BY usu_dataCad DESC";
        return Sql::findData($sql, $data);
    }
    /**
     * Verifica se o email já existe e retorna verdadeiro
     * @param string $email
     * @return bool
     */
    public function verifyEmail(string $email)
    {
        $sql = "SELECT usu_email FROM usu WHERE usu_email=?";
        $res = Sql::findData($sql, [$email]);

        if (count($res) > 0) {
            return true;
        }
        return false;
    }
    /**
     * Busca o Usuário de acordo com uma coluna específica, passe o 2º argumento como um array 
     * Exemplo: findPessoa('field',['email@email.com'])
     * @param string $field
     * @param array $data
     * @return array
     */
    public function findPessoa($field,$data)
    {
        $sql = "SELECT * FROM usu WHERE $field = ?";
        return Sql::findData($sql, $data);
    }
    /**
     * Busca o Usuário de acordo com um id passado dentro do argumento da função 
     * Exemplo: findRevendedor(10)
     */
    public function findRevendedor($data)
    {
        $sql = "SELECT usu_nome FROM usu WHERE usu_id = ?";
        return Sql::findData($sql, [$data]);
    }
}
