<?php



$this->registerCssFile('@web/css/style.css');

\yii\web\YiiAsset::register($this);

$this->title = 'Platy';
?>

<div class="waveWrapper waveAnimation">
    <div class="waveWrapperInner bgTop">
        <div class="wave waveTop" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')"></div>
    </div>
    <div class="waveWrapperInner bgMiddle">
        <div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
    </div>
    <div class="waveWrapperInner bgBottom">
        <div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
    </div>
</div>

<div class="site-index">
    <div class="p-5 mb-4 bg-transparent rounded-3">
        <div class="container-fluid py-5 text-center">
            <h1 class="display-4">Congratulations!</h1>
            <p class="fs-5 fw-light">You have encountered result of man's continuous <strong>torment</strong> </p>
            <p><a class="btn btn-lg btn-success" href="/site/about">Get yourself introduced</a></p>
        </div>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Databases!</h2>

                <p>At the moment You can access WoW DB only, however we have Steam at development phase</p>

                <p><a class="btn btn-outline-secondary" href="/wow/">WoW &raquo;</a></p>
                <p><a class="btn btn-outline-secondary" href="/steam/">Steam(WIP) &raquo;</a></p>

                <div class="bg-img1"></div>
            </div>

            <div class="col-lg-4">
                <h2>Reports!</h2>

                <p>Here you can check statistics of reports or submit new report</p>

                <p><a class="btn btn-outline-secondary" href="/report">Report's page &raquo;</a></p>
                <div class="bg-img2"></div>
            </div>
            <div class="col-lg-4">
                <h2>Junkyard!</h2>

                <p>Yes, we <strong>despise</strong> google services, so we can build our own 💀💀💀💀☠️☠️</p>

                <p><a class="btn btn-outline-secondary" href="/files/">plateenum cloud™ </a></p>
                <div class="bg-img3"></div>
            </div>
        </div>

    </div>
</div>


