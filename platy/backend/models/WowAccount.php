<?php

namespace app\models;

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
class WowAccount extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wowaccounts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mail', 'mail_password', 'BNet_password', 'BNet_name'], 'required'],
            [['worker_id', 'player_status', 'preparation'], 'integer'],
            [['mail', 'mail_password', 'BNet_password', 'BNet_name', 'BNet_location', 'Birthday'], 'string', 'max' => 255],
            [['worker_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mail' => 'Mail',
            'mail_password' => 'Mail Password',
            'BNet_password' => 'B Net Password',
            'BNet_name' => 'B Net Name',
            'BNet_location' => 'B Net Location',
            'Birthday' => 'Birthday',
            'worker_id' => 'Worker ID',
            'player_status' => 'Player Status',
            'preparation' => 'Preparation',
        ];
    }

    /**
     * {@inheritdoc}
     * @return WowAccountQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new WowAccountQuery(get_called_class());
    }
}
