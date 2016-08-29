<?php
namespace PrimBase\Controller;

//use Prim\Core\Translate;
use Prim\Core\Controller;

/**
 * Class Home
 *
 */
class Home extends Controller
{
    /**
     * PAGE: index
     */
    public function index()
    {
        //$t = new Translate($this->_getTranslation());

        // load views
        $this->design('home/index');
    }
}
