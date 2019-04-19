<?php
namespace PrimBase\BasePack\Controller;

use Prim\Controller;

class Home extends Controller
{
    public function __construct($view, array $options = [])
    {
        parent::__construct($view, $options);


    }

    public function index()
    {
        /** @var \PrimBase\BasePack\Model\BaseModel $model */
        // $model = $this->getModel('BaseModel');

        $this->render('home/index', 'BasePack', [
            'viewVariable' => ''
        ]);
    }
}
