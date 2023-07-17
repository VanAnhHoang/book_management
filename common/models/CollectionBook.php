<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "collection_book".
 *
 * @property int $collectionid
 * @property int $idbook
 *
 * @property \common\models\base\Collection $collection
 * @property Book $idbook0
 */
class CollectionBook extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'collection_book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['collectionid', 'idbook'], 'required'],
            [['collectionid', 'idbook'], 'integer'],
            [['collectionid', 'idbook'], 'unique', 'targetAttribute' => ['collectionid', 'idbook']],
            [['idbook'], 'exist', 'skipOnError' => true, 'targetClass' => Book::class, 'targetAttribute' => ['idbook' => 'id']],
            [['collectionid'], 'exist', 'skipOnError' => true, 'targetClass' => Collection::class, 'targetAttribute' => ['collectionid' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'collectionid' => 'Collectionid',
            'idbook' => 'Idbook',
        ];
    }

    /**
     * Gets query for [[Collection]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCollection()
    {
        return $this->hasOne(Collection::class, ['id' => 'collectionid']);
    }

    /**
     * Gets query for [[Idbook0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdbook0()
    {
        return $this->hasOne(Book::class, ['id' => 'idbook']);
    }
    public function getCollectionName()
    {
        return $this->hasOne(CollectionBook::className(), ['collectionid' => 'id']);
    }
}
