<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string $bookname
 * @property int|null $idauthor
 * @property int|null $idcategory
 * @property string|null $description
 * @property int|null $created_at
 * @property string|null $created_by
 * @property int|null $updated_at
 * @property string|null $updated_by
 * @property string $image
 * @property string $qrcode
 * 
 *
 * @property Category $idcategory0
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $file;
     public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bookname'], 'required'],
            [['idauthor', 'idcategory', 'created_at', 'updated_at'], 'integer'],
            [['description'], 'string'],
            [['bookname', 'created_by', 'updated_by', 'image'], 'string', 'max' => 255],
            [['idcategory'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['idcategory' => 'id']],
            [['file'],'file','extensions'=>'jpg,jpeg,png,gif,pdf,']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bookname' => 'Bookname',
            'idauthor' => 'Idauthor',
            'idcategory' => 'Idcategory',
            'description' => 'Description',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'image' => 'Image',
            'qrcode' => 'QR',
        ];
    }

    /**
     * Gets query for [[Idcategory0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdcategory0()
    {
        return $this->hasOne(Category::class, ['id' => 'idcategory']);
    }
}
