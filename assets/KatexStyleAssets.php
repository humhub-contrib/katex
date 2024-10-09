<?php

namespace humhub\contrib\modules\katex\assets;

use humhub\components\assets\AssetBundle;

/**
* AssetsBundles are used to include assets as javascript or css files
*/
class KatexStyleAssets extends AssetBundle
{
    /**
     * @var string defines the path of your module assets
     */
    public $sourcePath = '@katex/node_modules/katex/dist';

    public $css = [
        'katex.min.css',
    ];
}
