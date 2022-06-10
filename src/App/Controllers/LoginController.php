<?php
namespace App\Controllers;
use App\Controllers\MainController;
use App\PDO\Pessoa;

final class LoginController {
    public static function viewLogin(){
        $title = "Faça Login";
        include "./public/layout/header.php";
        include "./public/view_login.php";
        include "./public/layout/footer.php";
    }
    public static function forgout(){
        $title = "Esqueci a Senha";
        include "./public/layout/header.php";
        include "./public/view_forgout_password.php";
        include "./public/layout/footer.php";
    }
    public static function login($data)
    {
        //Aqui vai a lógica do login
        $usuario = new Pessoa();
        $result = $usuario->findPessoa('usu_email',[$data['email']]);
        
        if (count($result) > 0) {

            // verifica se o status do usuário é igual a 2 no bd, 2 representa bloqueado
            if ($result[0]['usu_status_id'] == 1) {
                if ($result[0]['usu_senha'] === $data['password']) {
                    return $_SESSION['logado'] = $result[0];
                } else {
                    return $_SESSION['message']= "E-mail ou senha inválidos tente novamente";
                }
            } else {
                return $_SESSION['message']="Seu acesso está bloqueado, contate o administrador";
            }
        } else {
            return $_SESSION['message']= "Cadastro não localizado!";
        }
    }
}