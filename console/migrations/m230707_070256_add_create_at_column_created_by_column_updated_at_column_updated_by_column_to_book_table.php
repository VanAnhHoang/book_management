<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%book}}`.
 */
class m230707_070256_add_create_at_column_created_by_column_updated_at_column_updated_by_column_to_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%book}}', 'created_at', $this->integer());
        $this->addColumn('{{%book}}', 'created_by', $this->string());
        $this->addColumn('{{%book}}', 'updated_at', $this->integer());
        $this->addColumn('{{%book}}', 'updated_by', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%book}}', 'created_at');
        $this->dropColumn('{{%book}}', 'created_by');
        $this->dropColumn('{{%book}}', 'updated_at');
        $this->dropColumn('{{%book}}', 'updated_by');
    }
}
