<?php

use yii\db\Migration;

/**
 * Class m230627_070742_collection_book
 */
class m230627_070742_collection_book extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('collection_book', [
            'id' => $this->primaryKey(),
            'collectionname' => $this->string()->notNull(),
        ]);

        // Tạo bảng liên kết để lưu trữ quan hệ nhiều-nhiều giữa "collection_book" và "book"
        $this->createTable('collection_book_book', [
            'collectionid' => $this->integer(),
            'idbook' => $this->integer(),
            'PRIMARY KEY(collectionid, idbook)',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // Xóa bảng liên kết "collection_book_book"
        $this->dropTable('collection_book_book');

        // Xóa bảng "collection_book"
        $this->dropTable('collection_book');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230627_070742_collection_book cannot be reverted.\n";

        return false;
    }
    */
}
