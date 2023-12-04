
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'grid-form',

]);

?>


<div class="row justify-content-center">
    <div class="col-md-3">
        <?= $form->field($model, 'mail')->textInput() ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'mail_password')->textInput() ?>
    </div>
    <div class="col-md-3">
        <?= $form->field($model, 'BNet_password')->textInput() ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'BNet_name')->textInput() ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'BNet_location')->textInput() ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'Birthday')->textInput() ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'worker_id')->textInput() ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'player_status')->textInput() ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'preparation')->textInput() ?>
    </div>
</div>

<div class="form-group">
    <div class="col-md-12 text-center">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
    </div>
</div>






<?php ActiveForm::end();?>  