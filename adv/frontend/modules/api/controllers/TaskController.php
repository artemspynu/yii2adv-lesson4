<?php

namespace frontend\modules\api\controllers;

use common\models\Task;
use yii\rest\Controller;

/**
 * Default controller for the `api` module
 */
class TaskController extends Controller
{
    public function actionIndex(){
        return new ActiveDataProvider([
           'query' => Task::find()
        ]);
    }
    public function actionView($id){
        return Task::findOne($id);
    }
//    /**
//     * Renders the index view for the module
//     * @return string
//     */
//    public function actionIndex()
//    {
//        return $this->render('index');
//    }
}
