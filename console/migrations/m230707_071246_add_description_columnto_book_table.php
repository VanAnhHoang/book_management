<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%book}}`.
 */
class m230707_071246_add_description_columnto_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%book}}', 'description', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%book}}', 'description');
    }
}
