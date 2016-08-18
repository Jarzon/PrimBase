<?php
namespace PROJECT\Controller;

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
    public function page404($t)
    {
        header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');

        // load views
        $this->design('error/404', $t);
    }
}