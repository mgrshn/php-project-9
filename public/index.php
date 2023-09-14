<?php

/**
 * This is index.php file with routing.
 * php version 8.2.10
 *
 * @category File
 * @package  MyPackage
 * @author   Maxim Grisin <grishinma2009@yandex.ru>
 * @license  https://opensource.org/license/mit/ The MIT License
 * @link     not now
 */

require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;
use Slim\Middleware\MethodOverrideMiddleware;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
//use Slim\Factory\AppFactory;

$app = AppFactory::create();

$app->get(
    '/',
    function (
        Request $request,
        Response $response,
        $args
    ) {
        $response->getBody()->write("Here is starting page");
        return $response;
    }
);

$app->run();
