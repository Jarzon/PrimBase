<?php declare(strict_types=1);
namespace PrimBase\BasePack\Controller;

use Prim\AbstractController;

use Prim\View;
use \PrimBase\BasePack\Model\BaseModel;

class Home extends AbstractController
{
    public BaseModel $baseModel;

    public function __construct(
        View $view,
        array $options,
        BaseModel $basemodel
    ) {
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
