<?php
namespace PrimBase\BasePack\Controller;

use Prim\Controller;
use PrimBase\BasePack\Model\BaseModel;

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
        $model = new BaseModel($this->db);

        $this->addVar('name', 'anonymous');

        $this->design('home/index');
    }
}
