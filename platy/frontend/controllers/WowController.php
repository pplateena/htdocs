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

    public function actionAccounts()
    {
        $accounts = WowAccount::find()->all();


        return $this->render('index', [
            'accounts' => $accounts,
        ]);
    }
    // Controller action
    public function actionUpdate($id)
    {
        $model = WowAccount::findOne($id);

        if ($model) {
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                Yii::$app->session->setFlash('success', 'Values modified successfully.');
            } else {
                Yii::$app->session->setFlash('error', 'Error modifying values: ' . print_r($model->errors, true));
            }
        } else {
            Yii::$app->session->setFlash('error', 'Record not found.');
        }

        return $this->redirect(['index']); // Redirect to the index page or another view
    }



}
