<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Create Report';

$this->params['breadcrumbs'][] = $this->title;
?>

<div class="waveWrapper waveAnimation">
    <div class="waveWrapperInner3 bgTop">
        <div class="wave waveTop" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')"></div>
    </div>
    <div class="waveWrapperInner3 bgMiddle">
        <div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
    </div>
    <div class="waveWrapperInner3 bgBottom">
        <div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
    </div>
</div>

<div class="report-create justify-content-center text-center">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(['action' => ['report/store'], 'method' => 'post']); ?>

    <?= $form->field($model, 'account_id')->dropDownList(
        \yii\helpers\ArrayHelper::map($wowAccounts, 'id', 'mail')
    )->label('Select Account') ?>

    <?= $form->field($model, 'gold_amount')->textInput() ?>

    <?= $form->field($model, 'reported_at')->textInput(['type' => 'date']);  echo  $model->reported_at;?>

    <div class="form-group">
        <?= Html::submitButton('Submit Report', ['class' => 'btn btn-lg custom-btn']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>