<?php

namespace addons\TinyBlog\html5\controllers;

use Yii;
use common\controllers\AddonsController;

/**
 * 默认控制器
 *
 * Class DefaultController
 * @package addons\TinyBlog\html5\controllers
 */
class BaseController extends AddonsController
{
    /**
     * @var string
     */
    public $layout = "@addons/TinyBlog/html5/views/layouts/main";
}
