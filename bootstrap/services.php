<?php

use Psr\Container\ContainerInterface;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Slim\Flash\Messages;

$containerBuilder->addDefinitions([
    'logger' => function (ContainerInterface $c) {
        $logger = new Logger($c->get('settings')['logger']['name']);
        $file_handler = new StreamHandler($c->get('settings')['logger']['path']);
        $logger->pushHandler($file_handler);
        return $logger;
    },
    'flash' => function (ContainerInterface $c) {
        return new Messages;
    },
]);