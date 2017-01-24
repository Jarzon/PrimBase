<?php
namespace PrimBase\Controller;

use Prim\Controller;

/**
 * Class Home
 *
 */
class Home extends Controller
{
    public function __construct($view) {
        parent::__construct($view);

        // some code that apply to every pages in the controller
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
