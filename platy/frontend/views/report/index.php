<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->registerCssFile('@web/css/style.css');

$this->params['breadcrumbs'][] = ['label' => 'Reports', 'url' => ['index']];
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


<h1 class="display-1 text-center justify-content-center">Welcome to yours reports system!</h1>

<div class="container-fluid py-5 text-center bg-transparent">

    <p class="fs-5 fw-light"></p>
    <p class="fs-4 fw-light">

    <div class="body-content">
        <div class="row justify-content-center text-center ">

            <div class="col-lg-4 text-center">

                <p>Here your bots can send requests to populate our "WowReports" table, or write it by yourself</p>
                <p><a class="btn btn-lg custom-btn" href="/report/create/">Submit a report</a></p>


            </div>
            <div class="col-lg-4 text-center">
                <p>Graphs, charts and fun is it? No it's not, however i suffered to do this shit for a long as time, so
                here you are
                <p><a class="btn btn-lg custom-btn" href="/report/chart">Charts!</a></p></p>

            </div>
        </div>

    </div>



