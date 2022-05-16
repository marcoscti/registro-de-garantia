<?php

namespace App\Controllers;

use App\PDO\Nivel;
use App\PDO\Pessoa;

class AdminController
{
    public static function viewAdminDashboard()
    {
        $title = "Dashboard";
        include_once "./public/layout/header.php";
        include_once "./public/layout/nav_superior.php";
        include_once "./public/layout/nav_left.php";
        include_once "./public/view_admin_dashboard.php";
        include_once "./public/layout/footer.php";
    }
    public static function viewAddUser()
    {
        $nivel = new Nivel();
        $list = $nivel->getList();
        $title = "Dashboard";
        include_once "./public/layout/header.php";
        include_once "./public/layout/nav_superior.php";
        include_once "./public/layout/nav_left.php";
        include_once "./public/view_admin_add_user.php";
        include_once "./public/layout/footer.php";
    }
    public static function mydata()
    {
        $title = "Meus dados";
        $id = $_SESSION['logado']['usu_email'];
        $u = new Pessoa();
        $user = $u->findPessoa([$id])[0];
        include_once "./public/layout/header.php";
        include_once "./public/layout/nav_superior.php";
        include_once "./public/layout/nav_left.php";
        include_once "./public/view_admin_my_data.php";
        include_once "./public/layout/footer.php";
    }
    public static function getRegistros()
    {
        $title = "Meus dados";
        $pessoa = new Pessoa();
        $cliente = $pessoa->getProspects([7, 2]);
        include_once "./public/layout/header.php";
        include_once "./public/layout/nav_superior.php";
        include_once "./public/layout/nav_left.php";
        include_once "./public/view_admin_list_garantia.php";
        include_once "./public/layout/footer.php";
    }
    public static function login($data)
    {
        //Aqui vai a lógica do login
        $usuario = new Pessoa();
        $result = $usuario->findPessoa([$data['username']]);

        if (count($result) > 0) {
            if ($result[0]['status_status_id'] != 3 /*3 representa inativo */) {
                if ($result[0]['usu_senha'] === $data['password']) {
                    return $_SESSION['logado'] = $result[0];
                } else {
                    echo "E-mail ou senha inválidos tente novamente";
                }
            } else {
                echo "Usuário está inativo, consulte o administrador";
            }
        } else {
            echo "Cadastro não localizado!";
        }
    }
    public static function updateData($data)
    {

        $d = [
            $data['usu_nome'],
            $data['usu_nome2'],
            $data['usu_senha'],
            $data['usu_id']
        ];
        $pessoa = new Pessoa();
        $pessoa->updateProfile($d);
    }
}
