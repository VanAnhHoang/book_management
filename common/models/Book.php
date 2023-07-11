<?php
namespace common\models;

use common\models\base\Category;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\writer\PngWriter;
use yii\helpers\Url;
use Yii;



class Book extends \common\models\base\Book {
   

    public $qr_code;

    public $file_pdf;

    public $file;

    public $file_image;
    
    public function rules()
    {
       
        return [
            [['bookname', 'image', 'files'], 'required'],
            [['idauthor', 'idcategory', ], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['description'], 'string'],
            [['bookname', 'description', 'image', 'files', 'created_by', 'updated_by'], 'string', 'max' => 255],

            [['bookname', 'description', 'files'], 'required'],
            [['idcategory'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['bookname', 'description', 'files', 'qrcode', 'created_by', 'updated_by'], 'string', 'max' => 255],
            [['qrcode'], 'unique'],
            ['file','file','extensions'=>'jpg,png,jpeg'],

            [['idcategory'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['idcategory' => 'id']],
        ];
    }

    public static function getCategory() {
        $category = Category::find()->all();
        $arr_cate = [];
        foreach($category as $cate) {
            $arr_cate[$cate->id] = $cate->categoryname;
        }
        return $arr_cate;
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

    public function createQR() {
        $writer = new PngWriter();
        $url = Url::toRoute(['book/view', 'id' =>$this->id], true);
        $qr_code = QrCode::create($url);

        $res = $writer->write($qr_code);
        $path = '../../qr/'.$this->bookname.time().'.png';
        $res -> saveToFile($path);
        $this->setAttribute('qrcode', $path);
        return $path;
    }
}