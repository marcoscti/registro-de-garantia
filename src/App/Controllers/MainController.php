<?php

namespace App\Controllers;

use App\PDO\Estado;
use App\PDO\Pessoa;

final class MainController
{
    public static function home()
    {
        $title = "Registro de Garantia";
        $e = new Estado();
        $buscaA = $e->getEstados();
        $buscaB = $buscaA;
        include "./public/layout/header.php";
        include "./public/view_insert_garantia.php";
        include "./public/layout/footer.php";
    }
    public static function insertGarantia(array $data, array $upload)
    {
        $pessoa = new Pessoa();

        /**
         * Verifica se o email já está cadastrado, caso já esteja deve retornar uma mensagem pedindo para o revendedor usar a senha de acesso para realizar o registro de garantia do cliente
         * */
        if (!$pessoa->verifyEmail($data['rev_email'])) {
            //Dados do revendedor
            $revendedor = [
                3, //Nível de Acesso: Revendedor
                $data['rev_cidade'], //Cidade
                $data['rev_uf'], //Estado
                $data['rev_nome'], //Nome
                $data['rev_sobrenome'], //sobrenome
                $data['rev_email'], //email
                $data['rev_cpf'], //Senha do usuário
                $data['rev_cpf'], //Cpf
                $data['rev_ddd'], //DDD
                $data['rev_tel'], //Telefone
            ];

            # O sistema deverá inserir o revendedor e enviar um email para ele com a senha, para que ele possa cadastrar mais clientes
            $id = $pessoa->setRevendedor($revendedor);
            
            //Dados do Cliente
            $cliente = [
                7, //Nivel de Acesso: Cliente
                $data['cli_cidade'], //Cidade Cliente
                $data['cli_uf'], //Estado Cliente
                $data['cli_nome'], //Nome Cliente
                $data['cli_nome2'], //Sobrenome Cliente
                $data['cli_email'], //Email Cliente
                $data['cli_cpf'], //CPF Cliente
                $data['cli_ddd'], //DDD Cliente
                $data['cli_tel'], //Telefone Cliente
                $data['cli_dataCompra'],
                $id
            ];

            if ($pessoa->setCliente($cliente)) {
                return  $_SESSION['message'] = "Registro de garantia realizado com sucesso!";
            } else {
                return  $_SESSION['message'] = $pessoa->setCliente($cliente);
            }
        } else {
            return  $_SESSION['message'] = "Revendedor, o seu email já está sendo utilizado, utilize a opção de login para registrar uma nova garantia";
        }
    }
}
