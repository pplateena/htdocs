<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\FileHelper;
use yii\web\NotFoundHttpException;

class FilesController extends Controller
{
    public function actionIndex()
    {
        $files = $this->getFilesList(Yii::getAlias('@backend/web/uploads'));

        return $this->render('index', ['files' => $files]);
    }

    public function actionDownload($filename)
    {
        $filePath = Yii::getAlias('@backend/web/uploads') . '/' . $filename;

        if (file_exists($filePath)) {
            Yii::$app->response->sendFile($filePath)->send();
        } else {
            throw new NotFoundHttpException('The requested file does not exist.');
        }
    }

    private function getFilesList($directory)
    {
        return FileHelper::findFiles($directory);
    }
}
