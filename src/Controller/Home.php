<?php
namespace PrimBase\Controller;

//use Prim\Translate;
use Prim\Controller;

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
        // load views
        $this->design('home/index');
    }
}
