<?php

use Psr\Container\ContainerInterface;

$containerBuilder->addDefinitions([
    'Web.HomeController' => function (ContainerInterface $c) {
        return new StudioAtual\Controllers\Web\HomeController($c);
    },
]);