<?php
use Prim\Container;

return [
    // Glob injection
    'PrimBase\*\Controller\*' => function(Container $dic) {
        return [
            $dic->model('BasePack\BaseModel'),
        ];
    },

    PrimBase\BasePack\Controller\Home::class => function(Container $dic) {
        return [
            $dic->model('BasePack\BaseModel'),
        ];
    },
];