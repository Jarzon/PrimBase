<?php
namespace PrimBase\Controller;

//use Prim\Translate;
use Prim\Controller;
use Prim\View;

/**
 * Class Home
 *
 */
class Home extends Controller
{
    public function __construct() {
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
