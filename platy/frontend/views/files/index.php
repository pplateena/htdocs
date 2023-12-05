<?php
use yii\helpers\Html;
?>

<h2>Files List</h2>

<ul>
    <?php foreach ($files as $file): ?>
        <li>
            <?= Html::a(basename($file), ['/files/download', 'filename' => basename($file)]) ?>
        </li>
    <?php endforeach; ?>
</ul>