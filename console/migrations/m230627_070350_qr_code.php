<?php

use yii\db\Migration;

/**
 * Class m230627_070350_qr_code
 */
class m230627_070350_qr_code extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this -> createTable('qr_code', [
            'id' => $this -> primaryKey(),
            'idbook' =>$this -> integer() -> notNull(),
            'qrcode' => $this -> string() ->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('qr_code');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230627_070350_qr_code cannot be reverted.\n";

        return false;
    }
    */
}
