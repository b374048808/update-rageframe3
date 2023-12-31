<?php

namespace common\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\UnauthorizedHttpException;
use common\helpers\Auth;
use common\traits\BaseAction;
use common\enums\AppEnum;

/**
 * 模块基类控制器
 *
 * Class AddonsController
 * @package common\controllers
 * @author jianyan74 <751393839@qq.com>
 */
class AddonsController extends Controller
{
    use BaseAction;

    /**
     * 视图自动加载文件路径
     *
     * @var string
     */
    public $layout = null;

    /**
     * @throws \yii\base\InvalidConfigException
     */
    public function init()
    {
        parent::init();

        // 后台视图默认载入模块视图
        if (!$this->layout && in_array(Yii::$app->id, AppEnum::admin())) {
            if (Yii::$app->id == AppEnum::MERCHANT) {
                $this->layout = '@' . AppEnum::BACKEND . '/views/layouts/addon';
            } else {
                $this->layout = '@' . Yii::$app->id . '/views/layouts/addon';
            }
        }
    }

    /**
     * @return array
     */
    public function behaviors()
    {
        $behaviors = [];
        if (in_array(Yii::$app->id, AppEnum::admin())) {
            $behaviors['access'] = [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'], // 登录
                    ],
                ],
            ];
        }

        return $behaviors;
    }

    /**
     * @param $action
     * @return bool
     * @throws UnauthorizedHttpException
     * @throws \yii\web\BadRequestHttpException
     */
    public function beforeAction($action)
    {
        if (!parent::beforeAction($action)) {
            return false;
        }

        // 每页数量
        $this->pageSize = Yii::$app->request->get('per-page', 10);
        $this->pageSize > 50 && $this->pageSize = 50;

        // 后台进行权限校验
        if (in_array(Yii::$app->id, [AppEnum::MERCHANT, AppEnum::BACKEND])) {
            // 判断当前模块的是否为主模块, 模块+控制器+方法
            $permissionName = '/' . Yii::$app->controller->route;
            // 判断是否忽略校验
            if (in_array($permissionName, Yii::$app->params['noAuthRoute'])) {
                return true;
            }
            // 开始权限校验
            if (!Auth::verify($permissionName)) {
                throw new UnauthorizedHttpException('对不起，您现在还没获此操作的权限');
            }

            // 记录上一页跳转
            $this->setReferrer($action->id);
        }

        return true;
    }
}
