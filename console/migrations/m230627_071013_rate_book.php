<?php

use yii\db\Migration;

/**
 * Class m230627_071013_rate_book
 */
class m230627_071013_rate_book extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('rate_book', [
            'id' => $this->primaryKey(),
            'idbook' => $this->integer()->notNull(),
            'iduser' => $this->integer()->notNull(),
            'commentbook' => $this -> text(),
            'ratingbook' => $this->integer()->notNull(),
            'createdat' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'), //time tạo
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('rate_book');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230627_071013_rate_book cannot be reverted.\n";

        return false;
    }
    */
}
