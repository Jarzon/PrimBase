<?php
use Prim\Container;

use PrimBase\BasePack\Controller\Home;

return [
    // Glob injection
    'PrimBase\*\Controller\*' => function(Container $dic) {
        $view = $dic->get('view');

        $localization = $dic->get('localizationService');

        $localization->setLanguage('fr');

        $view->registerFunction('getLanguage', function() use ($localization) {
            return $localization->language;
        });

        return [];
    },

    Home::class => function(Container $dic) {
        return [
            $dic->model('BasePack\BaseModel'),
        ];
    },
];
