<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "collection".
 *
 * @property int $id
 * @property string $collectionname
 *
 * @property CollectionBook[] $collectionBooks
 * @property Book[] $idbooks
 */
class Collection extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'collection';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['collectionname'], 'required'],
            [['collectionname'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'collectionname' => 'Collectionname',
        ];
    }

    /**
     * Gets query for [[CollectionBooks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCollectionBooks()
    {
        return $this->hasMany(CollectionBook::class, ['collectionid' => 'id']);
    }

    /**
     * Gets query for [[Idbooks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdbooks()
    {
        return $this->hasMany(Book::class, ['id' => 'idbook'])->viaTable('collection_book', ['collectionid' => 'id']);
    }
}
