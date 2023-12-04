<?php

use yii\grid\GridView;
use yii\jui\JuiAsset;
use yii\bootstrap5\Modal;
use yii\web\JsExpression;
use yii\helpers\Html;

$this->title = 'Wow Accounts';

use yii\web\View;
use yii\bootstrap5\BootstrapAsset;

// Register jQuery and Bootstrap
$this->registerAssetBundle(BootstrapAsset::class);
$this->registerJsFile('https://code.jquery.com/jquery-3.6.4.min.js', ['position' => View::POS_HEAD]);

JuiAsset::register($this);




?>

<div class="wow-accounts-index">
    <h1><?= $this->title ?> <?php echo Html::a('Create', ['/wow/create/'], ['class' => 'btn btn-lg btn-success']) ?> </h1>

    <?php \yii\widgets\Pjax::begin(['id' => 'wow-accounts-grid']) ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [

            'mail',
            'mail_password',
            'BNet_password',
            'BNet_name',
            'BNet_location',
            'Birthday',
            'worker_id',
            'player_status',
            'preparation',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}',

            ],
        ],
    ]);

    ?>


</div>

<?php \yii\widgets\Pjax::end() ?>