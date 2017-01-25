<?php
/**
 * Created by PhpStorm.
 * User: huangxiaorong
 * Date: 2017/1/25
 * Time: 下午5:20
 */

namespace backend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Test controller
 */
class LogController extends Controller
{
    public function actionIndex()
    {
        echo 'hello world';
        return $this->render('index');
    }
}
