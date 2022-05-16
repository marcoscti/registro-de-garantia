<?php
session_start();

use App\Controllers\AdminController;
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\PDO\Estado;


require_once "./vendor/autoload.php";
require_once "./env.php";


$app = new \Slim\App();

#Middleware para autenticação
$middlewareLogin = function($request, $response, $next){
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
    if (HomeController::insertGarantia($data)) {
        return $response->getBody()->write("Dados Cadastrados com sucesso!");
    } else {
        return $response->getBody()->write("Os dados não foram cadastrados!");
    }
});
$app->get('/login', LoginController::class . ':login');
$app->post('/login',function($request, $response, $args){
    $data = $request->getParsedBody();
    if(AdminController::login($data)){
        return $response->withRedirect('admin');
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
$app->get('/admin', AdminController::class . ':viewAdminDashboard')->add($middlewareLogin);
$app->get('/listar', AdminController::class . ':getRegistros')->add($middlewareLogin);
$app->get('/profile', AdminController::class . ':mydata')->add($middlewareLogin);
$app->post('/profile',function($request, $reponse, $args){
    $data = $request->getParsedBody();
    AdminController::updateData($data);
    echo "Success";
})->add($middlewareLogin);
$app->get('/novo', AdminController::class . ':viewAddUser')->add($middlewareLogin);
$app->get('/logout',function($request, $response, $args){
    session_start();
    session_destroy();
    return $response->withRedirect('/');
});

#Run application
$app->run();
