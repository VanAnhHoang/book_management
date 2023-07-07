<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%book}}`.
 */
class m230707_100310_add_qr_code_column_to_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%book}}', 'qr_code', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%book}}', 'qr_code');
    }
}
