<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%user}}`.
 */
class m230707_054017_add_create_at_column_created_by_column_updated_at_column_updated_by_column_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'created_at', $this->timestamp());
        $this->addColumn('{{%user}}', 'created_by', $this->string());
        $this->addColumn('{{%user}}', 'updated_at', $this->timestamp());
        $this->addColumn('{{%user}}', 'updated_by', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'created_at');
        $this->dropColumn('{{%user}}', 'created_by');
        $this->dropColumn('{{%user}}', 'updated_at');
        $this->dropColumn('{{%user}}', 'updated_by');
    }
}
