<?php

use Dotenv\Dotenv;
use DI\ContainerBuilder;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::create(__DIR__ . '/../'); 
$dotenv->load();

$containerBuilder = new ContainerBuilder();

require __DIR__ . '/config.php';
require __DIR__ . '/database.php';
require __DIR__ . '/services.php';
require __DIR__ . '/controllers.php';

$container = $containerBuilder->build();
AppFactory::setContainer($container);
$app = AppFactory::create();

require __DIR__ . '/../routes/web.php';