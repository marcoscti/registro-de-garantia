<?php
namespace App\Controllers;
use App\PDO\Estado;
use App\PDO\Pessoa;

class HomeController extends MainController{
    public static function home(){
        $title = "Registro de Garantia";
        $e = new Estado();
        $buscaEstado= $e ->getEstados();
        $buscaEstado2 =$buscaEstado;
        include "./public/layout/header.php";
        include "./public/view_insert_garantia.php";
        include "./public/layout/footer.php";

    }
    public static function insertGarantia($data) {
        $pessoa = new Pessoa();

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
        
        $id = $pessoa->setRevendedor($revendedor);
        $cliente = [
            2,//status
            7,//usunivel [Pessoa física]
            $data['cli_cidade'],//Cidade Cliente
            $data['cli_uf'],//Estado Cliente
            $data['cli_nome'],//Nome Cliente
            $data['cli_nome2'],//Sobrenome Cliente
            $data['cli_email'],//Email Cliente
            $data['cli_cpf'],//CPF Cliente
            $data['cli_ddd'],//DDD Cliente
            $data['cli_tel'],//Telefone Cliente
            $data['cli_dataCompra'],
            $id
        ];
        
        return $pessoa->setCliente($cliente);
    }
    public static function messageController($message){
        $title ="Mensagem";
        include "./public/layout/header.php";
        include "./public/view_message.php";
        include "./public/layout/footer.php";
    }
}