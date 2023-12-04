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
                    <form>
                        <select name="cars" id="account">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </select>
                        <input type="submit" value="Submit">
                    </form>

                </td>
                <?php endforeach; ?>
            </tr>


            </tfoot>


    </table>

</div>

