<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $categoryname
 * @property string $description
 * @property string $created_at
 * @property string|null $created_by
 * @property string $updated_at
 * @property string|null $updated_by
 *
 * @property Book[] $books
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['categoryname', 'description'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['categoryname', 'description', 'created_by', 'updated_by'], 'string', 'max' => 255],
            [['categoryname'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'categoryname' => 'Categoryname',
            'description' => 'Description',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * Gets query for [[Books]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Book::class, ['idcategory' => 'id']);
    }
}
