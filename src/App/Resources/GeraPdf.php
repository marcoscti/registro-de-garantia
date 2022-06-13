<?php

namespace App\Resources;

use App\PDO\Pessoa;

class GeraPdf
{

    public function gerarPDF($data)
    {
        $p = new Pessoa();
        $revendedor = $p->findPessoa('usu_id',[$data['usu_rev_id']])[0];
        return $body =
            "<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>" . $data['usu_nome'] . "</title>
    <style>
    body{
    width:100%;
    }
    .container{
        width:100%;
        margin:auto;
    }
    table, th,td{
        width:100%;
        border-collapse:collapse;
        border:1px solid gainsboro;
        padding:3px;
    }
    h1,h2{
        text-align:center;
    }
    </style>
</head>
<body>
    <div class='container'>
        <table class='table table-striped'>
            <thead>
                <th>
                <img src='./public/assets/img/logos-sirius/logo_seculus.jpg' alt='logo'>
                </th>
                <th>
                    <h1>Registro de Garantia</h1>
                </th>
            </thead>
            <tbody>
                <tr>
                    <td colspan='2'>
                        <h1>Dados do cliente</h1>
                    </td>
                </tr>
                <tr>
                <td colspan='2'>
                    <h2>" . $data['usu_nome'] . " " . $data['usu_sobrenome'] . "</h2>
                </td>
                </tr>
                <tr>
                    <td><b>Email:</b> " . $data['usu_email'] . "</td>
                    <td><b>CPF:</b> " . $data['usu_cpf'] . "</td>
                </tr>
                <tr>
                    <td><b>Cidade:</b> " . $data['cidade_nome'] . "</td>
                    <td><b>Estado:</b> ". $data['uf_nome'] ."</td>
                </tr>
                <tr>
                    <td><b>Data do cadastro:</b> " . date('d/m/Y', strtotime($data['usu_created_at'])) . "</td>
                    <td><b>Hora do cadastro:</b> " . date('h:i:s', strtotime($data['usu_created_at'])) . "</td>
                </tr>
                <tr>
                    <td colspan='2'>
                        <h2>Dados da Compra</h2>
                    </td>
                </tr>
                <tr>
                    <td><b>Data da Compra:</b> " . date('d/m/Y', strtotime($data['usu_data_compra'])) . "</td>
                    <td><b>Revendedor: </b>".$revendedor['usu_nome']. " ".$revendedor['usu_sobrenome']."</td>
                </tr>
                <tr>
                    <td><b>Número da Nota:</b> " . $data['usu_num_nota_fiscal'] . "</td>
                    <td><b>Referência do Relógio:</b> " . $data['usu_ref_relogio'] . "</td>
                </tr>
            </tbody>

        </table>
    </div>
</body>
</html>";
    }
}
