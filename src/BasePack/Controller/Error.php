<?php
namespace PrimBase\BasePack\Controller;

use Prim\Controller;

class Error extends Controller
{
    /**
     * This method handles the error page that will be shown on errors
     */
    public function handleError($e, $allowedMethods = '')
    {
        if($e == 404) {
            header('HTTP/1.1 404 Not Found');
        } else if ($e == 405) {
            header('HTTP/1.1 405 Method Not Allowed');
            header($allowedMethods);
            $e = 404;
        } else if ($e == 500) {
            header('HTTP/1.1 500 Internal Server Error');
        }

        $this->render("error/$e", 'BasePack');
    }

    public function debug($e)
    {
        $this->setTemplate('prim', 'BasePack');

        $this->render('error/debug', 'BasePack', [
            'error' => $e,
            'xdebug' => function_exists('xdebug_get_code_coverage')
        ]);

        exit;
    }
}