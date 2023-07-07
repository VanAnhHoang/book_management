<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%category}}`.
 */
class m230707_074315_add_created_at_column_created_by_column_updated_at_column_updated_by_column_to_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%category}}', 'created_at', $this->timestamp());
        $this->addColumn('{{%category}}', 'created_by', $this->string());
        $this->addColumn('{{%category}}', 'updated_at', $this->timestamp());
        $this->addColumn('{{%category}}', 'updated_by', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%category}}', 'created_at');
        $this->dropColumn('{{%category}}', 'created_by');
        $this->dropColumn('{{%category}}', 'updated_at');
        $this->dropColumn('{{%category}}', 'updated_by');
    }
}
