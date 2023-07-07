<?php

use yii\db\Migration;

/**
 * Class m230707_073534_category
 */
class m230707_073534_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this -> createTable('category', [
            'id' => $this -> primaryKey(),
            'categoryname' =>$this -> string()->notNull()->unique() ,
            'description' => $this -> string()->notNull(),
        ]);
        $this->addForeignKey(
            'fk_category_book', 
            
            'book', 
            'idcategory', 

            'category',  
            'id', 
            
            'CASCADE' 
        );
        
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


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230707_073534_category cannot be reverted.\n";

        return false;
    }
    */

