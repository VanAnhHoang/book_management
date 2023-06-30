<?php

use yii\db\Migration;

/**
 * Class m230627_070449_author
 */
class m230627_070449_author extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this -> createTable('author', [
            'id' => $this -> primaryKey(),
            'authorname' =>$this -> string() ,
            'age' => $this -> integer(),
            'dipcription' => $this -> text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('author');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230627_070449_author cannot be reverted.\n";

        return false;
    }
    */
}
