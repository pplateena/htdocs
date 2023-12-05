
<?php
use yii\helpers\Html;
?>

<h2>Files List</h2>

<ul>
    <?php foreach ($files as $file): ?>
        <li>
            <?= Html::a(basename($file), ['site/download', 'filename' => basename($file)]) ?>
        </li>
    <?php endforeach; ?>
</ul>
<p><a class="btn btn-outline-secondary" href="/file-upload/upload">upload &raquo;</a></p>