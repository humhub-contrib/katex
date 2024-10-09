<?php

use humhub\contrib\modules\katex\Events;
use humhub\modules\admin\widgets\AdminMenu;
use humhub\widgets\LayoutAddons;
use humhub\widgets\TopMenu;

return [
    'id' => 'katex',
    'class' => 'humhub\contrib\modules\katex\Module',
    'namespace' => 'humhub\contrib\modules\katex',
    'events' => [
        [
            'class' => LayoutAddons::class,
            'event' =>  LayoutAddons::EVENT_INIT,
            'callback' => [Events::class, 'onLayoutAddonsInit'],
        ],
    ],
];
