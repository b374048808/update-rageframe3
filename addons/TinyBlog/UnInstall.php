<?php

namespace addons\TinyBlog;

use Yii;
use yii\db\Migration;
use common\helpers\MigrateHelper;
use common\interfaces\AddonWidget;

/**
 * 卸载
 *
 * Class UnInstall
 * @package addons\TinyBlog
 */
class UnInstall extends Migration implements AddonWidget
{
    /**
     * @param $addon
     * @return mixed|void
     * @throws \yii\base\InvalidConfigException
     * @throws \yii\web\NotFoundHttpException
     * @throws \yii\web\UnprocessableEntityHttpException
     */
    public function run($addon)
    {
        MigrateHelper::downByPath([
            '@addons/TinyBlog/console/migrations/'
        ]);
    }
}
