<?php

namespace frontend\models;

use app\models\WowAccount;

/**
 * This is the ActiveQuery class for [[WowAccount]].
 *
 * @see WowAccount
 */
class WowAccountQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return WowAccount[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return WowAccount|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
