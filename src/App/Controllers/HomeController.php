<?php

namespace App\Controllers;

use App\PDO\Estado;
use App\PDO\Pessoa;

final class HomeController
{
    public static function home()
    {
        $title = "Registro de Garantia";
        $e = new Estado();
        $buscaEstado = $e->getEstados();
        $buscaEstado2 = $buscaEstado;
        include "./public/layout/header.php";
        include "./public/view_insert_garantia.php";
        include "./public/layout/footer.php";
    }
    public static function insertGarantia(array $data)
    {
        $pessoa = new Pessoa();
        
        if ($pessoa->verifyEmail($data['cli_email'])) {
            return  $_SESSION['message'] ="O email do Cliente já está sendo utilizado";
        }
        if ($pessoa->verifyEmail($data['rev_email'])) {
            return  $_SESSION['message'] ="O email do revendedor já está sendo utilizado";
        }
        
        $revendedor = [
            2,
            3,
            $data['rev_cidade'],
            $data['rev_uf'],
            $data['rev_nome'],
            $data['rev_nome2'],
            $data['rev_email'],
            $data['rev_cpf'],
            $data['rev_ddd'],
            $data['rev_tel'],
            $data['rev_refRel'],
            $data['rev_numNf']
        ];
        /**
         * o sistema deverá inserir o revendedor e enviar um email para ele com a senha, para que ele possa cadastrar mais clientes
         */
        $id = $pessoa->setRevendedor($revendedor);
        
        $cliente = [
            2, //status
            7, //usunivel [Pessoa física]
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

        if($pessoa->setCliente($cliente)){
            return  $_SESSION['message']= "Registro de garantia realizado com sucesso!";
        }else{
            return  $_SESSION['message']= $pessoa->setCliente($cliente);
        }
    }
}
