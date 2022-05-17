<?php
session_start();

use App\Controllers\AdminController;
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\PDO\Estado;
use Slim\Http\Response;

require_once "./vendor/autoload.php";
require_once "./env.php";

$message = [];
$app = new \Slim\App();

#Middleware para autenticação
$mid01 = function($request, $response, $next){
    // $_SESSION['logado'] = true;
    if(isset($_SESSION['logado'])){
        $response = $next($request,$response);
        return $response;
    }else{
        return $response->withRedirect('login');
    }
};

#Rotas Públicas
$app->get('/', HomeController::class . ':home')->setName('home');
$app->post('/', function ($request, $response, $args) {
    $data = $request->getParsedBody();
    if(HomeController::insertGarantia($data)){
        echo HomeController::insertGarantia($data);
    }else{
        echo HomeController::insertGarantia($data);
    }
});
$app->get('/login', LoginController::class . ':login');
$app->post('/login',function($request, $response, $args){
    $data = $request->getParsedBody();
    if(AdminController::login($data)){
        return $response->withRedirect('admin');
    }else{
        echo "Faça login primeiro";
    }
});
$app->get('/forgout', LoginController::class . ':forgout');
//A Função Abaixo serve para trazer as cidades para preencher o select do insert-garantia
$app->post('/list', function ($request, $response, $args) {
    $data = $request->getParsedBody();
    $e = new Estado();
    foreach ($e->getCidades($data['key']) as $c) {
        echo "<option " . $c['cidade_id'] . ">" . $c['cidade_nome'] . "</option>";
    }
});

#Rotas para usuários autenticados
$app->get('/admin', AdminController::class . ':viewAdminDashboard')->add($mid01);
$app->get('/listar', AdminController::class . ':getRegistros')->add($mid01);
$app->get('/profile', AdminController::class . ':mydata')->add($mid01);
$app->get('/novo', AdminController::class . ':viewAddUser')->add($mid01);
$app->get('/logout',function($request, $response, $args){
    session_start();
    session_destroy();
    return $response->withRedirect('/');
});

#Run application
$app->run();
