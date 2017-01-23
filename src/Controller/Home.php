<?php
namespace PrimBase\Controller;

use Prim\Controller;
use Prim\View;

/**
 * Class Home
 *
 */
class Home extends Controller
{
    public function __construct($view) {
        parent::__construct($view);

        // Get translation file for every page in the controller
        $this->_getTranslation();
    }

    /**
     * PAGE: index
     */
    public function index()
    {
        $this->addVar('name', 'anonymous');

        $this->design('home/index');
    }
}
