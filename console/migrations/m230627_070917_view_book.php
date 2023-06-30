<?php

use yii\db\Migration;

/**
 * Class m230627_070917_view_book
 */
class m230627_070917_view_book extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('view_book', [
            'id' => $this->primaryKey(),
            'idbook' => $this->integer()->notNull(),
            'viewdate' => $this->date()->notNull(),
            'viewcount' => $this->integer()->defaultValue(0),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('view_book');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230627_070917_view_book cannot be reverted.\n";

        return false;
    }
    */
}
