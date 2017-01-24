<?php
use Prim\Application;
use Prim\Container;

// Project's folder path
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);

// Composer autoloading
require ROOT . 'vendor/autoload.php';

// load application config
require APP . 'config/config.php';

$container = new Container(array(
    'view.class'    => 'Prim\View',
));

$app = new Application($container, $container->getController('PrimBase\Controller\Error'));