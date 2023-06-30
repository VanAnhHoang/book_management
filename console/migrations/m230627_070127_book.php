<?php

use yii\db\Migration;

/**
 * Class m230627_070127_book
 */
class m230627_070127_book extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('book', [
            'id' => $this -> primaryKey(),
            'bookname' => $this ->string() ->notNull(),
            'idauthor' => $this ->integer(),
            'idcategory' => $this ->integer(),
            'idfile' => $this ->integer(),
            'ngaxuatban' => $this -> date(),
            'dipcription' => $this -> text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this -> dropTable('book');
    
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230627_070127_book cannot be reverted.\n";

        return false;
    }
    */
}
