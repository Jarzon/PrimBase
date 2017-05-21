<?php
namespace PrimBase\BasePack\Service;

class View extends \Prim\View
{
    use \PrimUtilities\Localization;

    function __construct() {
        $this->setLanguage('en');
    }
}