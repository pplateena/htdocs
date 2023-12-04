<?php

namespace frontend\controllers;

class WowController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
