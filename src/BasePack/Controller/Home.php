<?php
namespace PrimBase\BasePack\Controller;

use Prim\Controller;

class Home extends Controller
{
    public function index()
    {
        /** @var \PrimBase\BasePack\Model\BaseModel $model */
        // $model = $this->getModel('BaseModel');

        $this->render('home/index', 'BasePack', [
            'viewVariable' => ''
        ]);
    }
}
