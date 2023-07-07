<?php

use yii\db\Migration;

/**
 * Class m230707_174010_book
 */
class m230707_174010_book extends Migration
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
            'idcategory' => $this ->integer() ->notNull()->defaultValue(0),
            'image' => $this ->string(),
            'description' => $this -> string(),
            'qrcode' => $this -> string(),
            'created_at' => $this->integer()->notNull(),
            'created_by'=> $this->integer() -> notNull(),
            'updated_at'=> $this->integer() -> notNull(),
            'updated_by'=> $this->integer() -> notNull(),
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this -> dropTable('book');
    
    }
}
