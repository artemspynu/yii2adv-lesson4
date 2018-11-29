<?php

namespace frontend\modules\api\models;


class User extends \common\models\User
{
    public function fields()
    {
        return [
            'username',
            'email',
            'fullId' => function ($model) {
                return $model->id . ' ' . $model->email;
            }
        ];
    }

    public function extraFields()
    {
        return ['tasks'];
    }
}