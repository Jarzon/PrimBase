<?php
use Prim\Core\Application;
use PROJECT\Controller\Error;

$start = microtime(true);

// set a constant that holds the project's folder path, like "/var/www/".
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);

// set a constant that holds the project's "application" folder, like "/var/www/application".
define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);

// Composer autoloading
require ROOT . 'vendor/autoload.php';

// load application config (error reporting etc.)
require APP . 'config/config.php';

try {
    $app = new Application();
} catch (\Exception $e) {
    $error = new Error;

    echo $error->page404($e);
}

//if(ENV == 'dev') echo microtime(true) - $start;