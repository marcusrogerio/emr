<?php

namespace app\modules\emr;

use yii\base\Module;

/**
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class EmrModule extends Module
{
    public function init()
    {
        parent::init();
        \Yii::$app->user->enableSession = false;
        \Yii::$app->user->enableAutoLogin = false;
    }
}