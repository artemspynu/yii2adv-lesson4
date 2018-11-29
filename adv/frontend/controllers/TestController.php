<?php

namespace frontend\controllers;

use yii\web\Controller;
use yii\helpers\VarDumper;


class TestController extends Controller
{
    public function actionIndex()
    {
        return VarDumper::dumpAsString(\Yii);
    }

}
