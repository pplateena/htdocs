<?php

use yii\db\Migration;


class m231203_182538_create_WowAccounts_table extends Migration
{

    public function safeUp()
    {
        $this->createTable('WowAccounts', [
            'id' => $this->primaryKey(),
            'mail' => $this->string()->notNull(),
            'mail_password' => $this->string()->notNull(),
            'BNet_password' => $this->string()->notNull(),
            'BNet_name' => $this->string()->notNull(),
            'BNet_location' => $this->string(),
            'Birthday' => $this->string(),
            'worker_id' => $this->integer()->unique(),
            'player_status' => $this->integer()->check('player_status IN (0, 1, 2, 3)'),
            'preparation' => $this->integer()->check('preparation IN (0, 1)'),

        ]);
    }


    public function safeDown()
    {
        $this->dropTable('{{%WowAccounts}}');
    }
}
