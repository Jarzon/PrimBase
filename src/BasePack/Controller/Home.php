<?php declare(strict_types=1);
namespace PrimBase\BasePack\Controller;

use Prim\AbstractController;

use \PrimBase\BasePack\Model\BaseModel;

class Home extends AbstractController
{
    public BaseModel $baseModel;

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
