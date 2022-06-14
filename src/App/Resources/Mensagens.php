<?php

namespace App\Resources;

class Mensagens
{


    /**
     * $data[
     * 'nome'
     * 'login'
     * 'senha'
     * ];
     */
    public static function senhaPrimeiroAcesso(array $data)
    {
        return "<body style='background-color:#eeeeee;display: flex;align-items: center;justify-content: center;font-family: Arial, Helvetica, sans-serif;padding:10px;'>
        <div style='margin:0 auto;width: 600px;background-color: #FFF;padding: 1em;border-top: 3px solid red;border-bottom: 3px solid red;'>
            <div style='display: flex;justify-content: center;'>
                <img src='cid:logo' width='150' alt='Logo' style='margin:0 auto;'>
            </div>
            <h2 style='text-align:center;text-transform:uppercase;'>REGISTRO DE GARANTIA</h2>
        <p>Olá <strong>" . $data['nome'] . "</strong>, seja bem vindo ao registro de garantia seculus, a partir de agora você poderá registrar outras garantias para seus clientes, para isso basta acessar o portal e entrar com o usuário e senha fornecidos abaixo.</p>
        <p style='font-size:16px;'>
            <strong>Login: </strong> <span>" . $data['email'] . "</span>
            <br>
            <strong>Senha: </strong> " . $data['senha'] . "
        </p>
        <div style='margin:50px;'></div>
        <p style='text-align:center; font-size: 11px;'>
            Essa mensagem foi enviada automaticamente, não responda.</br> Não copie ou divulgue essas informações e se você não é o destinatário autorizado a visualizá-las está passível de punições em leis federais.
        </p>
        </div>
    </body>";
    }

    public static function forgoutPassword(array $data)
    {
        return "<body style='background-color:#eeeeee;font-family: Arial, Helvetica, sans-serif;padding:20px;'>
        <div style='margin:0 auto;width: 600px;background-color: #FFF;padding: 1em;border-top: 3px solid red;border-bottom: 3px solid red;'>
            <div style='display: flex;justify-content: center;'>
                <img src='cid:logo' alt='Logo' width='150' style='margin:0 auto;'>
            </div>
            <h2 style='text-align:center;text-transform:uppercase;'>SUA SENHA DE ACESSO</h2>
        <p>Olá <strong>" . $data['nome'] . "</strong>, Essa é a sua senha do portal, não esqueça que ela é intransferível.</p>
        <p style='font-size:16px;'>
            <strong>Login: </strong>" . $data['email'] . "
            <br>
            <strong>Senha: </strong> " . $data['senha'] . "
        </p>
        <div style='margin:50px;'></div>
        <p style='text-align:center; font-size: 11px;'>
            Essa mensagem foi enviada automaticamente, não responda.</br> Não copie ou divulgue essas informações e se você não é o destinatário autorizado a visualizá-las está passível de punições em leis federais.
        </p>
        </div>
    </body>";
    }
}
