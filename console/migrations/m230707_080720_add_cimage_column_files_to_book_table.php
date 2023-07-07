<?php

use yii\db\Migration;

/**
 * Class m230707_080720_add_cimage_column_files_to_book_table
 */
class m230707_080720_add_cimage_column_files_to_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%book}}', 'image', $this->string()->notNull());
        $this->addColumn('{{%book}}', 'files', $this->string()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%book}}', 'image');
        $this->dropColumn('{{%book}}', 'image');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230707_080720_add_cimage_column_files_to_book_table cannot be reverted.\n";

        return false;
    }
    */
}
