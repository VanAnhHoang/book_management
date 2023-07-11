<?php

use yii\db\Migration;

/**
 * Class m230711_073743_collection
 */
class m230711_073743_collection extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('collection', [
            'id' => $this->primaryKey(),
            'collectionname' => $this->string()->notNull(),
        ]);

        // Tạo bảng liên kết để lưu trữ quan hệ nhiều-nhiều giữa "collection_book" và "book"
        $this->createTable('collection_book', [
            'collectionid' => $this->integer(),
            'idbook' => $this->integer(),
            'PRIMARY KEY(collectionid, idbook)',
        ]);

        $this->addForeignKey('fk_collection_book_book_collection_id', 
                            'collection_book',
                             'collectionid',
                              'collection',
                               'id');

        // Thêm liên kết khoá ngoại từ cột "id_book" trong bảng "collection_book_book" tới cột "id_book" trong bảng "book"
        $this->addForeignKey('fk_collection_book_book_book_id',
                             'collection_book',
                            'idbook',
                            'book',
                            'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()

    {
        $this->truncateTable('book');

        $this->truncateTable('collection');
        
        $this->truncateTable('collection_book');

        $this->dropForeignKey('fk_collection_book_book_collection_id', 'collection_book_book');
        $this->dropForeignKey('fk_collection_book_book_book_id', 'collection_book_book');
        // Xóa bảng liên kết "collection_book_book"
        $this->dropTable('collection_book');

        // Xóa bảng "collection_book"
        $this->dropTable('collection');
    }


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230711_073743_collection cannot be reverted.\n";

        return false;
    }
    */
}
