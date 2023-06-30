<?php

use yii\db\Migration;

/**
 * Class m230627_070637_upload_file
 */
class m230627_070637_upload_file extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this -> createTable('upload_file', [
            'id' => $this -> primaryKey(),
            'filename' =>$this -> string() -> notNull(),
            'path' => $this -> string() -> notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('upload_file');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230627_070637_upload_file cannot be reverted.\n";

        return false;
    }
    */
}
