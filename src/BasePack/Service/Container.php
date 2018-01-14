<?php
namespace PrimBase\BasePack\Service;

class Container extends \Prim\Container
{
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

        return $this->init($obj, $this->getView(), $this);
    }

    /**
     * @return \Prim\Controller
     */
    public function getErrorController()
    {
        $obj = 'errorController';

        return $this->init($obj, $this->getView(), $this);
    }
}