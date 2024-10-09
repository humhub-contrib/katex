<?php

namespace humhub\contrib\modules\katex;

use humhub\contrib\modules\katex\assets\Assets;

class Events
{
    /**
     * Defines what to do when the top menu is initialized.
     *
     * @param $event
     */
    public static function onLayoutAddonsInit($event)
    {
        Assets::register($event->sender->view);
    }
}
