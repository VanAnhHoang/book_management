<?php

namespace common\models\base;

use Yii;
use Yii\helpers\Url;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\writer\PngWriter;



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
 * @property string $files
 * @property string $qrcode
 * 
 * 
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
            [['created_at', 'updated_at'], 'safe'],
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
            'files' => 'Files',
            'image' => 'Image',
            'qrcode' => 'QR',
        ];
    }

    /**
     * Gets query for [[Idcategory0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdcategory()
    {
        return $this->hasOne(Category::class, ['id' => 'idcategory']);
    }
    public function createQR() {
        $writer = new PngWriter();
        $url = Url::toRoute(['book/view', 'id' =>$this->id], true);
        $qr = QrCode::create($url);

        $res = $writer->write($qr);
        $path = '../../qr/'.$this->bookname.time().'.png';
        $res -> saveToFile($path);
        $this->setAttribute('qrcode', $path);
        return $path;
    }
    public function beforeSave($insert) {
        if ($insert) {
            $this->created_at = time();
            $this->created_by = Yii::$app->user->identity->username;
        } else {
            $this->updated_at = time();
            $this->updated_by = Yii::$app->user->identity->username;
        }
        return parent::beforeSave(($insert));
    }
}
