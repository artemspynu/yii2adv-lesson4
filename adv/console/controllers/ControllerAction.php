<?php

namespace console\controllers;

use yii\web\Controller;
use yii\helpers\VarDumper;

class ControllerAction extends Controller
{
    public function actionIndex()
    {
        return 'Hello, World!';
    }

}