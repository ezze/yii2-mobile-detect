<?php

namespace ezze\yii2\mobiledetect;

use yii\base\Component;

require_once(\Yii::getAlias('@vendor/mobiledetect/mobiledetectlib/Mobile_Detect.php'));

class MobileDetect extends Component
{
    protected $mobileDetect;

    public function init()
    {
        parent::init();
        $this->mobileDetect = 0;
    }
}