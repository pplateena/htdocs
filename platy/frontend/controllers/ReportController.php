<?php

namespace frontend\controllers;


use frontend\models\WowAccount;
use yii\data\ActiveDataProvider;
use Yii;
use yii\helpers\Json;



use yii\web\Controller;

use frontend\models\ReportForm;
use frontend\models\Report;

class ReportController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionCreate()
    {
        $model = new ReportForm();
        $wowAccounts = WowAccount::find()->all();

        return $this->render('create', [
            'model' => $model,
            'wowAccounts' => $wowAccounts,
        ]);
    }

    public function actionStore()
    {
        $model = new ReportForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $report = new Report();
            $report->attributes = $model->attributes;

            // Set the reported_at value
            $report->reported_at = $model->reported_at;

            if ($report->save()) {
                Yii::$app->session->setFlash('success', 'Report submitted successfully.');
                return $this->redirect(['index']);
            } else {
                Yii::$app->session->setFlash('error', 'Error submitting report: ' . print_r($report->errors, true));
            }
        }

        $wowAccounts = WowAccount::find()->all();

        return $this->render('create', [
            'model' => $model,
            'wowAccounts' => $wowAccounts,
        ]);


    }

    public function actionChart()
    {
        $data = Report::find()
            ->select(['account_id', 'gold_amount', 'reported_at'])
            ->orderBy(['reported_at' => SORT_ASC])
            ->asArray()
            ->all();

        $chartData = [];

        foreach ($data as $row) {
            $accountId = $row['account_id'];
            $chartData[$accountId]['labels'][] = $row['reported_at'];
            $chartData[$accountId]['data'][] = $row['gold_amount'];
        }

        return $this->render('chart', [
            'chartData' => Json::encode($chartData),
        ]);
    }

}