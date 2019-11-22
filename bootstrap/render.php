<?php

use Psr\Container\ContainerInterface;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;
use Slim\Views\TwigMiddleware;

$view = new Twig(__DIR__ . '/../resources/views', [
    'cache' => ($container->get('settings')['displayErrorDetails']) ? false : __DIR__ . '/../storage/cache',
    'auto_reload' => true
]);
$routeParser = $app->getRouteCollector()->getRouteParser();
$twigMiddleware = new TwigMiddleware($twig, $container, $routeParser, '/base-path');
$app->add($twigMiddleware);