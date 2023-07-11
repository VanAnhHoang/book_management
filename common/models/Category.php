<?php
namespace common\models;
use common\models\base\Category;

class Book extends \common\models\base\Book {
    public $id_file;

    public $qr_code;
    
    public function rules()
    {
       
        return [
            [['booknam', 'description', 'image', 'files'], 'required'],
            [['id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['bookname', 'description', 'image', 'files', 'qrcode', 'created_by', 'updated_by'], 'string', 'max' => 255],
            [['qr_code'], 'unique'],
            ['file','file','extensions'=>'jpg,png,jepg'],

            [['idcategory'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['idcategory' => 'idcategory']],
        ];
    }

    public static function getcategory() {
        $category = Category::find()->all();
        $arr_cate = [];
        foreach($category as $cate) {
            $arr_cate[$cate->id] = $cate->categoryname;
        }
        return $arr_cate;
    }
}