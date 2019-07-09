<?php
namespace PrimBase\BasePack\Controller;

use Prim\Controller;

use \PrimBase\BasePack\Model\BaseModel;

class Home extends Controller
{
    public $baseModel;

    public function __construct($view, array $options = [], BaseModel $basemodel)
    {
        parent::__construct($view, $options);

        $this->baseModel = $basemodel;
    }

    public function index()
    {
        $this->render('home/index', 'BasePack', [
            'viewVariable' => ''
        ]);
    }
}
