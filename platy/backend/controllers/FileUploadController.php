<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use common\models\FileUploadForm;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;
class FileUploadController extends Controller
{
    public function actionIndex()
    {
        $model = new \common\models\FileUploadForm();

        if (Yii::$app->request->isPost) {
            $model->file = \yii\web\UploadedFile::getInstance($model, 'file');
            if ($model->upload()) {
                Yii::$app->session->setFlash('success', 'File uploaded successfully.');
            } else {
                Yii::$app->session->setFlash('error', 'Error uploading file.');
            }
        }

        $files = $this->getFilesList(Yii::getAlias('@webroot/uploads'));

        return $this->render('index', ['model' => $model, 'files' => $files]);
    }
    private function getFilesList($directory)
    {
        return FileHelper::findFiles($directory);
    }
    public function actionUpload()
    {
        $model = new FileUploadForm();

        if (Yii::$app->request->isPost) {
            $model->file = UploadedFile::getInstance($model, 'file');

            if ($model->upload()) {
                // file uploaded successfully
                Yii::$app->session->setFlash('success', 'File uploaded successfully.');
            } else {
                Yii::$app->session->setFlash('error', 'Error uploading file.');
            }
        }

        return $this->render('upload_form', ['model' => $model]);
    }
}
