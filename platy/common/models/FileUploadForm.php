<?php

namespace common\models;

use yii\base\Model;
use yii\web\UploadedFile;

class FileUploadForm extends Model
{
    public $file;

    public function rules()
    {
        return [
            [['file'], 'file'],
        ];
    }
    public function upload()
    {
        if ($this->validate()) {
            $uploadPath = 'uploads/';

            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }

            $this->file->saveAs($uploadPath . $this->file->baseName . '.' . $this->file->extension);
            return true;
        } else {
            return false;
        }
    }
}

?>