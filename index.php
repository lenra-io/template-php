<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require 'vendor/autoload.php';

include "manifest.php";

header("Content-Type: application/json");

$app = AppFactory::create();

$app->post('/function/{appUuid}', function (Request $request, Response $response, array $args) {
    global $manifest;

    $uuid = $args['appUuid'];
    print("Receive request for app: $uuid");

    $body = json_decode($request->getBody(), true);

    if(isset($body["resource"])){
        return $response;
    } elseif(isset($body["action"])){
        return $response;
    } elseif(isset($body["widget"])){
        return $response;
    }else{
        $response->getBody()->write(json_encode($manifest));
        print_r($response);
        return $response;
    }
});

$app->run();
?>
