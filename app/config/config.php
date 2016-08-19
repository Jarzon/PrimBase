<?php

/**
 * Database config
 */
define('DB_ENABLE', true);
define('DB_TYPE', 'mysql');
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'PROJECT');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8');

/**
 * Error reporting
 */
define('ENV', 'dev');

if (ENV == 'dev') {
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
}

/**
 * URL config
 */

define('URL_PUBLIC_FOLDER', 'public');
define('URL_PROTOCOL', 'http://');
define('URL_DOMAIN', $_SERVER['SERVER_NAME']);

if(ENV == 'dev') define('URL_SUB_FOLDER', '/PROJECT/');
else define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));

define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);