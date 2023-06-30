<?php

use yii\db\Migration;

/**
 * Class m230627_073705_role
 */
class m230627_073705_role extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('role', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'description' => $this->text(),
        ]);

        $this->insert('role', [
            'name' => 'admin',
            'description' => 'Admin role',
        ]);

        $this->insert('role', [
            'name' => 'user',
            'description' => 'User role',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('role');
    }
    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230627_073705_role cannot be reverted.\n";

        return false;
    }
    */
}
