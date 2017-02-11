<?php
namespace PrimBase\BasePack\Controller;

use Prim\Controller;

/**
 * Class Home
 *
 */
class Home extends Controller
{
    public function __construct($view) {
        parent::__construct($view);

        // $this->setTemplate('design');
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
