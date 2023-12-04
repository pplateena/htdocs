<?php
use yii\helpers\BaseUrl;
use yii\helpers\Html;





?>
<div class="container-fluid py-5 text-center">
    <h1 class="display-4">Welcome to WoW DB</h1>
    <p class="fs-5 fw-light">Here are current accs</p>
</div>



<div>
    <table id="yourDataTable" class="table table-responsive text-center">



            <thead>
                <tr>
                    <?php foreach ($accounts as $account): ?>
                    <td><?= Html::encode($account->mail) ?> </td>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($accounts as $account): ?>
                    <td><button></button> <button></button></td>
                    <?php endforeach; ?>
                </tr>
            </tbody>

            <tfoot>
            <tr>
                <?php foreach ($accounts as $account): ?>
                <td> Worker_<?=Html::encode($account->worker_id) ?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <?php foreach ($accounts as $account): ?>
                    <td>
                        <form action="<?= Yii::$app->urlManager->createUrl(['controller/update-account', 'id' => $account->id]) ?>" method="post">
                            <select name="player_status" id="account_status">
                                <option value="0" <?= ($account->player_status == 0) ? 'selected' : '' ?>>Blank</option>
                                <option value="1" <?= ($account->player_status == 1) ? 'selected' : '' ?>>DF bought</option>
                                <option value="2" <?= ($account->player_status == 2) ? 'selected' : '' ?>>Unsubscribed</option>
                                <option value="3" <?= ($account->player_status == 3) ? 'selected' : '' ?>>Subscribed</option>
                            </select>
                            <select name="preparation" id="account_preparation">
                                <option value="0" <?= ($account->preparation == 0) ? 'selected' : '' ?>>Unprepared</option>
                                <option value="1" <?= ($account->preparation == 1) ? 'selected' : '' ?>>Ready to use</option>
                            </select>
                            <input type="submit" value="Submit">
                        </form>

                    </td>
                <?php endforeach; ?>

            </tr>


            </tfoot>


    </table>

</div>

