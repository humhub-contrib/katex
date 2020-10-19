<?php

namespace humhub\contrib\modules\katex;

use Yii;
use yii\helpers\Url;

class Module extends \humhub\components\Module
{
    public $resourcesPath = 'resoruces';

    /**
    * @inheritdoc
    */
    public function getConfigUrl()
    {
        return Url::to(['/katex/admin']);
    }

    /**
    * @inheritdoc
    */
    public function disable()
    {
        // Cleanup all module data, don't remove the parent::disable()!!!
        parent::disable();
    }
}
