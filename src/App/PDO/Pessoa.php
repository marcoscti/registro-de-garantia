<?php
namespace App\PDO;
use App\PDO\Sql;

class Pessoa{
    public function setRevendedor($data){
        $sql ="INSERT INTO usu (status_status_id, usuNivel_usuNivel_id, cidade_cidade_id, uf_uf_id,usu_nome, usu_nome2, usu_email, usu_cpf, usu_ddd, usu_tel, usu_refRel, usu_numNf) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        Sql::setData($sql,$data);
        $result = Conexao::conectar()->lastInsertId();
        return $result;
    }

    public function setCliente($data){

        $sql ="INSERT INTO usu (status_status_id, usuNivel_usuNivel_id, cidade_cidade_id, uf_uf_id,usu_nome, usu_nome2, usu_email, usu_cpf, usu_ddd, usu_tel,usu_dataCompra,usu_rev_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        Sql::setData($sql,$data);
        return true;

    }
    public function updateProfile($data){

        $sql ="UPDATE usu SET usu_nome=?,usu_nome2=?,usu_senha=? WHERE usu_id=?";
        Sql::setData($sql,$data);
        return true;

    }
    public function getProspects($data){
        $sql = "SELECT * FROM usu WHERE usuNivel_usuNivel_id = ? AND status_status_id = ? ORDER BY usu_dataCad DESC";
        return Sql::findData($sql,$data);
    }
    public function verifyEmail($email){
        $sql ="SELECT usu_email WHERE usu_email=?";
        if(Sql::findData($sql,[$email])){
            return true;
        }
    }
    public function findPessoa($data){
        $sql = "SELECT * FROM usu WHERE usu_email = ?";
        return Sql::findData($sql,$data);
    }
    public function findRevendedor($data){
        $sql = "SELECT usu_nome FROM usu WHERE usu_id = ?";
        return Sql::findData($sql,[$data]);
    }
}