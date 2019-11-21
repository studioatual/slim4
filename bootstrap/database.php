<?php

use Psr\Container\ContainerInterface;
use Illuminate\Database\Capsule\Manager as Capsule;

$containerBuilder->addDefinitions([
    'db' => function (ContainerInterface $c) {
        $capsule = new Capsule;
        $capsule->addConnection($c->get('settings')['db']);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
        return $capsule;
    }
]); 