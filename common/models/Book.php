<?php
namespace common\models;

class Book extends \common\models\base\Book {
    public $idfile;

    public $qr_code;
    
    public function rules()
    {
       
        return [
            [['bookname'], 'required'],
            [['idauthor', 'idcategory', 'idfile', 'created_at', 'updated_at'], 'integer'],
            [['description'], 'string'],
            [['bookname', 'created_by', 'updated_by'], 'string', 'max' => 255],

            [['bookname', 'description', 'idfiles'], 'required'],
            [['idcategory'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['bookname', 'description', 'idfiles', 'qr_code', 'created_by', 'updated_by'], 'string', 'max' => 255],
            [['qr_code'], 'unique'],
            ['file_image','file','extensions'=>'jpg,png'],

            [['id_category'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::class, 'targetAttribute' => ['id_category' => 'id_category']],
        ];
    }

    public static function getCategory() {
        $categories = \common\models\base\Category::find()->all();
        $arr_cate = [];
        foreach($categories as $cate) {
            $arr_cate[$cate->id_category] = $cate->name_category;
        }
        return $arr_cate;
    }
}