<?php

namespace backend\controllers;

use yii\web\Controller;
use yii\helpers\VarDumper;


class TestController extends Controller
{
    public function actionIndex()
    {
        $t = time();
        while (true){
            sleep(1);
            if(time()>$t+10){
                break;
            }
        }
        return $this->renderContent('back');
    }
}
