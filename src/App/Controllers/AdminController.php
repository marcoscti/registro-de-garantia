<?php

namespace App\Controllers;

use App\PDO\Estado;
use App\PDO\Nivel;
use App\PDO\Pessoa;

final class AdminController
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
        $user = $u->findPessoa('usu_email',[$id])[0];
        include_once "./public/layout/header.php";
        include_once "./public/layout/nav_superior.php";
        include_once "./public/layout/nav_left.php";
        include_once "./public/view_admin_my_data.php";
        include_once "./public/layout/footer.php";
    }

    public static function detail($id)
    {
        $title = "Detalhes";
        $u = new Pessoa();
        $user = $u->findPessoa('usu_id',[$id])[0];
        include_once "./public/layout/header.php";
        include_once "./public/layout/nav_superior.php";
        include_once "./public/layout/nav_left.php";
        include_once "./public/view_admin_details.php";
        include_once "./public/layout/footer.php";
    }

    public static function getRegistros()
    {
        
        $title = "Meus dados";
        $pessoa = new Pessoa();
        $id = $_SESSION['logado']['usu_id'];
        $cliente = $pessoa->getList([3,1,$id]);
        include_once "./public/layout/header.php";
        include_once "./public/layout/nav_superior.php";
        include_once "./public/layout/nav_left.php";
        include_once "./public/view_admin_list_garantia.php";
        include_once "./public/layout/footer.php";
    }
    public static function updateData($data)
    {

        $d = [
            $data['usu_nome'],
            $data['usu_sobrenome'],
            $data['usu_senha'],
            date("Y-m-d H:i:s", time()),
            $data['usu_id']
        ];
        $pessoa = new Pessoa();
        $pessoa->updateProfile($d);
    }
    public static function viewInsertGarantia(){
       
        $e = new Estado();
        $buscaA = $e->getEstados();
        $buscaB = $buscaA;
        $title = "Nova Garantia";
        include_once "./public/layout/header.php";
        include_once "./public/layout/nav_superior.php";
        include_once "./public/layout/nav_left.php";
        include_once "./public/view_admin_insert_garantia.php";
        include_once "./public/layout/footer.php";
    }
    public static function viewRegistro(){
        
    }
    public static function insertUsuario($data){
        $usuario = [
            $data['usuNivel_usuNivel_id'],
            $data['usu_nome'],
            $data['usu_sobrenome'],
            $data['usu_email']
        ];
        $p = new Pessoa();
        return $p->setUsuario($usuario);
    }
}
