<?php
/** @var $this Container */

use \Prim\Container;

$this
    ->setParameter('pdo', PrimPack\Service\PDO::class)
    ->setParameter('errorController', PrimPack\Controller\Error::class);

// Register a service
// $this->register('service', PrimBase\BasePack\Service\Service::class, [$this]);

if ($this->options['debug']) {
    $this->get('toolbarService')->addElement('Stats', function () {
        return ': ' . count($this->get('localizationService')->messages) . ' messages - ' . $this->get('router')->getRoutesCount() . ' routes ';
    });
}
