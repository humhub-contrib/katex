<?php

namespace humhub\contrib\modules\katex\assets;

use humhub\components\assets\AssetBundle;

/**
* AssetsBundles are used to include assets as javascript or css files
*/
class Assets extends AssetBundle
{
    /**
     * @var string defines the path of your module assets
     */
    public $sourcePath = '@katex/resources';

    public $js = [
        'js/humhub.katex.bundle.js',
    ];

    public $depends = [
        KatexStyleAssets::class,
    ];
}
