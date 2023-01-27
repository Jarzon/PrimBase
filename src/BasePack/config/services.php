<?php declare(strict_types=1);
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

    PrimPack\Controller\Error::class => fn(Container $dic) => [$dic->service('PrimPack\Logger'), $dic],
    Home::class => fn(Container $dic) => [$dic->model('BasePack\BaseModel')],
];
