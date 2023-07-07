<?php

use yii\db\Migration;

/**
 * Class m230707_174615_category
 */
class m230707_174615_category extends Migration
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
            'created_at' => $this->timestamp(),
            'created_by' => $this->string(),
            'updated_at'=>$this->timestamp(),
            'updated_by'=>$this->string(),
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
        echo "m230707_174615_category cannot be reverted.\n";

        return false;
    }
    */
}
