<?php

use App\Controller\ClubeController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Exception\HttpNotFoundException;

require_once(__DIR__ . '/vendor/autoload.php');

$app = AppFactory::create();
$app->setBasePath("/futebol_api"); //Adicionar o nome da pasta do projeto

$app->addBodyParsingMiddleware(); // Disponibiliza JSON, FormData e XML
$app->addErrorMiddleware(true, true, true); //Retorna um erro do Framework caso não tratado

//ROTAS
$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Funcionou!");
    return $response;
});

$app->get("/hello/{nome}", function(Request $request, Response $response, $args) {
    $nome = $args["nome"];

    $response->getBody()->write("Olá Mundo " . $nome . "!");
    return $response;
});

$app->get("/clubes", ClubeController::class . ":listar");



//Tratamento para rota não encontrada
$app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function ($request, $response) {
    throw new HttpNotFoundException($request, "Esta rota não existe na API!");
});

$app->run();

http://localhost:8082/futebol_api/clubes