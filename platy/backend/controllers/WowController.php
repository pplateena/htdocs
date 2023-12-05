<?php

namespace backend\controllers;


use yii\web\Controller;
use yii\data\ActiveDataProvider;
use app\models\WowAccount;
use Yii;
use yii\web\Response;

class WowController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
        ];
    }


    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => WowAccount::find(),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionUpdate($id)
    {
        $model = WowAccount::findOne($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
                Yii::$app->session->setFlash('success', 'Model saved successfully.');
            return $this->redirect('index');
            }
        else {
                Yii::$app->session->setFlash('error', 'Failed to save model.');
            }



        return $this->render('update_form', [
            'model' => $model,
        ]);
    }
    public function actionCreate()
    {
        $model = new WowAccount();

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            if ($model->save()) {
                // Model saved successfully
                Yii::$app->session->setFlash('success', 'Model saved successfully.');
            } else {
                // Model save failed
                Yii::$app->session->setFlash('error', 'Failed to save model.');
            }

            // Redirect or do additional processing after saving the model
            return $this->redirect(['index']); // Redirect to the index page or another appropriate action
        }

        return $this->render('create_form', [
            'model' => $model,
        ]);

    }

}
