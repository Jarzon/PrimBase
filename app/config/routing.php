<?php
// TODO: Add the filter to Prim
$router->filter('auth', function(){
    session_start();

    if(!isset($_SESSION['auth'])) {
        header($_SERVER['SERVER_PROTOCOL'] . ' 403 Forbidden');

        echo '403 Forbidden <a href="'.URL_BASE.'/login">Log in</a>';

        return false;
    }
});

$router->get('/', ['\PrimBase\Controller\Home', 'index']);

$router->group(['prefix' => 'admin', 'before' => 'auth'], function($router) {
    $router->get('/', ['\PrimBase\Controller\Admin', 'index']);
});