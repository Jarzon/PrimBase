<?php
namespace PrimBase\Controller;

use Prim\Core\Controller;

/**
 * Errors
 *
 */
class Error extends Controller
{
    /**
     * PAGE: index
     * This method handles the error page that will be shown when a page is not found
     */
    public function handleError($e)
    {
        if($e instanceof \Phroute\Phroute\Exception\HttpRouteNotFoundException) {
            header($_SERVER['SERVER_PROTOCOL'].' 404 Not Found');
        } else if ($e instanceof \Phroute\Phroute\Exception\HttpMethodNotAllowedException) {
            header($_SERVER['SERVER_PROTOCOL'].' 405 Method Not Allowed');
            header($e->getMessage());
        }

        $this->design('error/404');
    }
}