<?php

use Psr\Container\ContainerInterface;

$containerBuilder->addDefinitions([
    'auth' => function (ContainerInterface $c) {
        return new StudioAtual\Auth\Auth(
            StudioAtual\Models\User::class,
            'user'
        );
    },
    'jwt' => function (ContainerInterface $c) {
        return new StudioAtual\Auth\Jwt(
            $container->get('settings')['domain'],
            $container->get('settings')['app']['key'],
            ['email', 'username'],
            StudioAtual\Models\User::class,
            'user'
        );
    }
]);