<?php
use yii\helpers\BaseUrl;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'WoW DB';
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


<div class="container-fluid py-5 text-center">
    <h1 class="display-4">Welcome to WoW DB</h1>
    <p class="fs-5 fw-light">Here are current accs</p>

    <table id="yourDataTable" class="table text-center table-bordered table style="layout: fixed; width: 100%;">
    <style>
        #yourDataTable {
            table-layout: fixed;
            width: 100%;
        }
    </style>
            <thead class="text">
                <tr>
                    <?php foreach ($accounts as $account): ?>
                    <td class="display-6" style="font-size: 2rem;"><?= Html::encode($account->mail) ?> </td>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($accounts as $account): ?>
                    <td>
                        <button class="divided-button">
                            <div class="left-content">
                                <span onclick="">Left</span>
                            </div>
                            <div class="divider-line"></div>
                            <div class="right-content">
                                <span onclick="">Right</span>
                            </div>
                        </button>
                    </td>
                    <?php endforeach; ?>
                </tr>



                <tr>
                    <?php foreach ($accounts as $account): ?>
                    <td> Worker_<?=Html::encode($account->worker_id) ?></td>
                    <?php endforeach; ?>
                </tr>
                <tr>

                    <?php foreach ($accounts as $account): ?>
                        <?php $form = ActiveForm::begin(['action' => ['/wow/update', 'id' => $account->id], 'method' => 'post']); ?>
                        <td>

                            <?= $form->field($account, 'player_status')->dropDownList([
                                '0' => 'Blank',
                                '1' => 'DF bought',
                                '2' => 'Unsubscribed',
                                '3' => 'Subscribed',
                            ])->label('Player Status') ?>

                            <?= $form->field($account, 'preparation')->dropDownList([
                                '0' => 'Unprepared',
                                '1' => 'Ready to use',
                            ])->label('Preparation') ?>
                                <br>
                            <a><?= Html::submitButton('Update', ['class' => 'btn btn-lg custom-btn']) ?></a>

                        </td>
                        <?php ActiveForm::end(); ?>
                    <?php endforeach; ?>


            </tbody>




    </table>
</div>

