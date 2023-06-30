<?php

use yii\db\Migration;

/**
 * Class m230627_070539_category
 */
class m230627_070539_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this -> createTable('category', [
            'id' => $this -> primaryKey(),
            'categoryname' =>$this -> string() ,
            'dipcription' => $this -> text(),
        ]);

        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('category');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230627_070539_category cannot be reverted.\n";

        return false;
    }
    */
}
