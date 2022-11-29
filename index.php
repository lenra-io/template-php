<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use GuzzleHttp\Psr7\LazyOpenStream;

require 'vendor/autoload.php';

include "manifest.php";

header("Content-Type: application/json");

$app = AppFactory::create();

$app->post('/function/{appUuid}', function (Request $request, Response $response, array $args) {
    global $manifest;
    $body = json_decode($request->getBody(), true);

    if (isset($body["resource"])) {
        $image = file_get_contents('./resources/' . $body["resource"]);
        $response->getBody()->write($image);
        return $response->withHeader('Content-Type', 'img/png');
    } elseif (isset($body["action"])) {
        require $manifest["listeners"][$body["action"]];

        $response->getBody()->write(json_encode(run($body["props"], $body["event"], $body["api"])));
        return $response->withHeader('Content-Type', 'application/json');
    } elseif (isset($body["widget"])) {
        if (isset($manifest["widgets"][$body["widget"]])) {
            require $manifest["widgets"][$body["widget"]];
            $response->getBody()->write(json_encode(build($body["data"], $body["props"])));
            return $response->withHeader('Content-Type', 'application/json');
        } else {
            $response->getBody()->write(json_encode("Error widget not found"));
            return $response->withStatus(500);
        }
    } else {
        $response->getBody()->write(json_encode(array("manifest" => $manifest)));
        return $response->withHeader('Content-Type', 'application/json');
    }
});

$app->run();
