<?php
namespace PrimBase\BasePack\Service;

use PrimPack\Container\Toolbar;
use PrimUtilities\Container\Localization;

class Container extends \Prim\Container
{
    use Localization, Toolbar;

    /**
     * Use this Class to add Services to the container
     */

    /**
     * @return \Prim\Controller
     */
    public function getController(string $obj)
    {
        $this->parameters["$obj.class"] = $obj;

        //You can inject Services into the Controller like so:
        // return $this->init($obj, $this->getView(), $this, $this->getService());

        return $this->init($obj, $this->getView(), $this, $this->getLocalizationService(), $this->getToolbarService());
    }

    /**
     * @return \Prim\Controller
     */
    public function getErrorController()
    {
        $obj = 'errorController';

        return $this->init($obj, $this->getView(), $this, $this->getLocalizationService(), $this->getToolbarService());
    }
}