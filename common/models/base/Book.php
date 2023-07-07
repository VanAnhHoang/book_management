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
 * @property int|null $idfile
 * @property string|null $ngaxuatban
 * @property string|null $dipcription
 * @property int|null $created_at
 * @property string|null $created_by
 * @property int|null $updated_at
 * @property string|null $updated_by
 * @property string $image
 * @property string $qr_code
 * @property string $files
 *
 * @property Category $idcategory0
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
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
            [['bookname', 'image', 'files'], 'required'],
            [['idauthor', 'idcategory', 'idfile', 'created_at', 'updated_at'], 'integer'],
            [['ngaxuatban'], 'safe'],
            [['description'], 'string'],
            [['bookname', 'created_by', 'updated_by', 'image', 'files'], 'string', 'max' => 255],
            [['idcategory'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['idcategory' => 'id']],
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
            'idfile' => 'Idfile',
            'ngaxuatban' => 'Ngaxuatban',
            'description' => 'Description',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'image' => 'Image',
            'qr_code' => 'QR',
            'files' => 'Files',
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
