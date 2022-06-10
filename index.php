<?php
session_start();

use App\Controllers\AdminController;
use App\Controllers\MainController;
use App\Controllers\LoginController;
use App\PDO\Estado;

require_once "./vendor/autoload.php";
require_once "./env.php";

$message = [];
$app = new \Slim\App();

#Middleware para autenticação
$mid01 = function ($request, $response, $next) {
    // $_SESSION['logado'] = true;
    if (isset($_SESSION['logado'])) {
        $response = $next($request, $response);
        return $response;
    } else {
        return $response->withRedirect('login');
    }
};

#Rotas Públicas
$app->get('/', MainController::class . ':home');

$app->post('/', function ($request, $response, $args) {
    $data = $request->getParsedBody();
    MainController::insertGarantia($data);
    return $response->withRedirect('/');
});

$app->get('/login', LoginController::class . ':viewLogin');

$app->post('/login', function ($request, $response, $args) {
    $data = $request->getParsedBody();
    if (LoginController::login($data)) {
        return $response->withRedirect('admin');
    }
});
$app->get('/forgout', LoginController::class . ':forgoutView');
$app->post('/forgout', function ($request, $response, $args) {
    $data = $request->getParsedBody();
    LoginController::forgout($data);
    return $response->withRedirect('login');
});
//A Função Abaixo serve para trazer as cidades para preencher o select da view insert garantia
$app->post('/list', function ($request, $response, $args) {
    $data = $request->getParsedBody();
    $e = new Estado();
    foreach ($e->getCidades($data['key']) as $c) {
        echo "<option value='" . $c['id_city'] . "'>" . $c['cidade_nome'] . "</option>";
    }
});

#Rotas para usuários autenticados
$app->get('/admin', AdminController::class . ':viewAdminDashboard')->add($mid01);

$app->get('/listar', AdminController::class . ':getRegistros')->add($mid01);

$app->post('/detalhe', function ($request, $response, $args) {
    $id = $request->getParsedBody();
    AdminController::detail($id['usu_id']);
})->add($mid01);

$app->get('/profile', AdminController::class . ':mydata')->add($mid01);

$app->post('/profile', function ($request, $response, $args) {
    $data = $request->getParsedBody();
    AdminController::updateData($data);
    return $response->withRedirect('profile');
})->add($mid01);

$app->get('/novo', AdminController::class . ':viewAddUser')->add($mid01);

$app->post('/novo', function ($request, $response, $args) {
    $data = $request->getParsedBody();
    AdminController::insertUsuario($data);
})->add($mid01);

$app->get('/logout', function ($request, $response, $args) {
    session_start();
    session_destroy();
    return $response->withRedirect('/');
});

#Run application
$app->run();
