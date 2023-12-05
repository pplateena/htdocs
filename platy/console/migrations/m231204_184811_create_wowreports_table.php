<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%wowreports}}`.
 */
class m231204_184811_create_wowreports_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('wowreports', [
            'report_id' => $this->primaryKey(),
            'account_id' => $this->integer()->notNull(),
            'gold_amount' => $this->integer()->notNull(),
            'reported_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP')->notNull(),
            // Add other columns as needed
        ]);

        // Add foreign key constraint
        // Change 'report' to 'reports' in the addForeignKey method
        $this->addForeignKey('fk_report_account', 'wowreports', 'account_id', 'wowaccounts', 'id', 'CASCADE', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // Drop the foreign key constraint first
        $this->dropForeignKey('fk_report_account', 'wowreports');

        // Then drop the table
        $this->dropTable('wowreports');
    }
}
