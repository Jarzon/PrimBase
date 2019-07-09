<?php
use Prim\Container;

use PrimBase\BasePack\Controller\Home;

return [
    // Glob injection
    'PrimBase\*\Controller\*' => function(Container $dic) {
        return [
            $dic->model('BasePack\BaseModel'),
        ];
    },

    Home::class => function(Container $dic) {
        return [
            $dic->model('BasePack\BaseModel'),
        ];
    },
];
