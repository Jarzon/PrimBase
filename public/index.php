<?php declare(strict_types=1);
use Prim\Container;

session_start();

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

$config = [
    'root' => $root,
    'app' => "{$root}app/"
];

// Composer autoloading
require "{$config['root']}vendor/autoload.php";

$container = new Container($config);

ob_start(function ($buffer) {
    return preg_replace('~^([ \t\n]+)~m', '', $buffer);
});
$container->get('application');
ob_end_flush();
flush();
session_write_close();
