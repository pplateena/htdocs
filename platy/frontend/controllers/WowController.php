<?php

namespace frontend\controllers;


use frontend\models\WowAccount;
use yii\data\ActiveDataProvider;

class WowController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $accounts = WowAccount::find()->all();


        return $this->render('index', [
            'accounts' => $accounts,
        ]);
    }

}
