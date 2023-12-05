<?php

namespace frontend\models;


use frontend\models\WowAccountQuery;
use Yii;

/**
 * This is the model class for table "wowaccounts".
 *
 * @property int $id
 * @property string $mail
 * @property string $mail_password
 * @property string $BNet_password
 * @property string $BNet_name
 * @property string|null $BNet_location
 * @property string|null $Birthday
 * @property int|null $worker_id
 * @property int|null $player_status
 * @property int|null $preparation
 */
class ReportForm extends \yii\base\Model
{
    public $account_id;
    public $gold_amount;
    public $reported_at;

    public function rules()
    {
        return [
            [['account_id', 'gold_amount'], 'integer'],
            [['account_id', 'gold_amount'], 'required'],
            [['reported_at'], 'date', 'format' => 'php:Y-m-d', 'message' => 'Invalid date format. Please use YYYY-MM-DD.']

        ];
    }
}
