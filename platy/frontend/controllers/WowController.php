<?php

namespace frontend\controllers;


use frontend\models\WowAccount;
use yii\data\ActiveDataProvider;
use Yii;

class WowController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $accounts = WowAccount::find()->all();


        return $this->render('index', [
            'accounts' => $accounts,
        ]);
    }
    // Controller action
    public function actionUpdate($id)
    {
        $account = WowAccount::findOne($id);

        if (Yii::$app->request->isPost) {
            $account->player_status = Yii::$app->request->post('player_status');
            $account->preparation = Yii::$app->request->post('preparation');
            Yii::$app->session->setFlash('success', 'yupyup');

            if ($account->save()) {
                Yii::$app->session->setFlash('success', 'Account updated successfully.');
            } else {
                Yii::$app->session->setFlash('error', 'Error updating account.');
            }
        }

        return $this->redirect(['index']);
    }



}
