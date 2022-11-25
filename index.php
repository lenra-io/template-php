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
    $body = json_decode($request->getBody(), true);

    if (isset($body["resource"])) {
        return $response;
    } elseif (isset($body["action"])) {
        require $manifest["listeners"][$body["action"]];

        $response->getBody()->write(json_encode(run($body["props"], $body["event"], $body["api"])));
        return $response->withHeader('Content-Type', 'application/json');
    } elseif (isset($body["widget"])) {
        require $manifest["widgets"][$manifest["rootWidget"]];
        $response->getBody()->write(json_encode(build($body["data"], $body["props"])));
        return $response->withHeader('Content-Type', 'application/json');
    } else {
        $response->getBody()->write(json_encode(array("manifest" => $manifest)));
        return $response->withHeader('Content-Type', 'application/json');
    }
});

$app->run();
