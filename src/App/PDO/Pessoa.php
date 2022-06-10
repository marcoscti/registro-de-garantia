<?php

namespace App\PDO;

use App\PDO\Sql;

/**
 * @class: Pessoa
 * @autor: marcoscti
 */

final class Pessoa
{
    /**
     * Insere um usuário com perfil de revendedor na base e retorna o ID gerado
     */
    public function setRevendedor(array $data)
    {
        $sql = "INSERT INTO tb_person (
            usu_nivel_id,
            usu_cidade_id,
            usu_uf_id,
            usu_nome,
            usu_sobrenome,
            usu_email,
            usu_senha,
            usu_cpf,
            usu_ddd,
            usu_tel)
            VALUES (?,?,?,?,?,?,?,?,?,?)";
        Sql::setData($sql, $data);
        $result = Conexao::conectar()->lastInsertId();
        return $result;
    }
    /**
     * Insere um cliente no banco
     */
    public function setCliente($data)
    {
        
        $sql = "INSERT INTO tb_person (
            usu_nivel_id,
            usu_cidade_id,
            usu_uf_id,
            usu_nome,
            usu_sobrenome,
            usu_email,
            usu_cpf,
            usu_ddd,
            usu_tel,
            usu_data_compra,
            upload_anexo,
            usu_num_nota_fiscal,
            usu_ref_relogio,
            usu_rev_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        return Sql::setData($sql, $data);
    }
    /**
     * Insere um cliente no banco
     */
    public function setUsuario($data)
    {
        $sql = "";
        return Sql::setData($sql, $data);
    }
    /**
     * Atualiza um perfil de usuário
     */
    public function updateProfile($data)
    {
        $sql = "";
        return Sql::setData($sql, $data);
    }
    /**
     * Retorna um usuário pelo id do nível de acesso e id do status passando os argumentos dentro de um array
     * EX: getProspects([2,7])
     * @param $data
     * @return array
     */
    public function getProspects(array $data)
    {
        $sql = "SELECT * FROM tb_person WHERE usu_nivel_id = ? AND status_id = ? ORDER BY usu_created_at DESC";
        return Sql::findData($sql, $data);
    }
    /**
     * Verifica se o email já existe e retorna verdadeiro
     * @param string $email
     * @return bool
     */
    public function verifyEmail(string $email)
    {
        $sql = "SELECT usu_email FROM tb_person WHERE usu_email=?";
        $res = Sql::findData($sql, [$email]);

        if (count($res) > 0) {
            return true;
        }
        return false;
    }
    /**
     * Busca o Usuário de acordo com uma coluna específica, passe o 2º argumento dentro de um array 
     * Exemplo: findPessoa('field',['email@email.com'])
     */
    public function findPessoa($field, $data)
    {
        $sql = "SELECT * FROM tb_person WHERE $field = ?";
        return Sql::findData($sql, $data);
    }
    /**
     * Busca o Usuário de acordo com um id passado dentro do argumento da função 
     * Exemplo: findRevendedor(10)
     */
    public function findRevendedor($data)
    {
        $sql = "SELECT usu_nome FROM tb_person WHERE usu_id = ?";
        return Sql::findData($sql, [$data]);
    }
}
