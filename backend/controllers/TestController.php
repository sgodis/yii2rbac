<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class TestController extends Controller
{
    public function actionHello()
    {
        echo 'hello world';
    }
}
