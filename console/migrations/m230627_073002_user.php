<?php

use yii\db\Migration;

/**
 * Class m230627_073002_user
 */
class m230627_073002_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull() -> unique(),
            'email' => $this->string(),
            'password' => $this -> string() -> notNull(),
            'idrole' => $this->integer()->notNull(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230627_073002_user cannot be reverted.\n";

        return false;
    }
    */
}
